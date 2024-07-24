<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use SoftCreatR\PerplexityAI\PerplexityAI;
use App\Models\Avatars;
use App\Models\Avatars_sources;
use App\Models\Feeds;
use Goutte\Client;

class CreateNewsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-news-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    protected $perplexity;

    public function __construct(PerplexityAI $perplexity)
    {
        parent::__construct();
        $this->perplexity = $perplexity;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $currentDay = date('l'); // Get current day of the week
        $currentHour = now()->hour; // Get current hour

        $avatars = Avatars::all();
        foreach ($avatars as $avatar) {
            $this->runTask($avatar);
            continue;

            // Check if today is a working day
            if (
                $avatar->working_days == 'Every Day' ||
                $avatar->working_days == $currentDay
            ) {
                // Check if current hour is within working hours
                if ($currentHour >= $avatar->working_hours && $currentHour < $avatar->working_hours + 5) {
                    // Calculate the interval in minutes
                    $totalMinutes = 5 * 60;
                    if ($avatar->working_hours == 20)
                        $totalMinutes = 4 * 60;
                    $intervalMinutes = $totalMinutes / $avatar->articles_day;

                    // Determine the current minute within the working hours
                    $currentMinuteWithinWindow = (now()->minute + ($currentHour - $avatar->working_hours) * 60);

                    // Check if the current time falls within the interval
                    for ($i = 0; $i < $avatar->articles_day; $i++) {
                        $startInterval = $i * $intervalMinutes;
                        $endInterval = $startInterval + 1;
                        if ($currentMinuteWithinWindow >= $startInterval && $currentMinuteWithinWindow < $endInterval) {
                            // Run the task
                            $this->runTask($avatar);
                            break;
                        }
                    }
                }
            }
        }
    }

    private function runTask($avatar)
    {
        // Fetch the source link for the avatar
        $avatarSources = Avatars_sources::where('avatar_Id', $avatar->_id)->get();
        if ($avatarSources->isEmpty()) {
            Log::info('No source links found for avatar: ' . $avatar->_id);
            return;
        }

        $source_count = $avatarSources->count();
        if ($source_count == 1) {
            $sourceLink = $avatarSources->first()->source_link;
        } else {
            $rand = rand(0, $source_count - 1);
            foreach ($avatarSources as $avatarSource) {
                $sourceLink = $avatarSource->source_link;
                if ($rand == 0) {
                    break;
                }
                $source_count--;
            }
        }

        // Your task logic here, e.g., fetch blog content from $sourceLink
        Log::info('Task executed with source link: ' . $sourceLink);
        // Perform the required operations using $sourceLink
        $this->processSourceLink($avatar, $sourceLink);
    }

    private function processSourceLink($avatar, $sourceLink)
    {
        $newsUrl = $this->scrapeNewsUrl($sourceLink);
        if (!filter_var($newsUrl, FILTER_VALIDATE_URL))
            return;

        $feed_id = $this->scrapeText($avatar->_id, $newsUrl, $avatar->text_setting_content_type, $avatar->text_setting_content_type2, $avatar->lang_setting_content_type);
        if (empty($feed_id))
            return;

        if ($avatar->image_setting) {
            $localImageUrl = $this->scrapeImage($newsUrl, $avatar->image_setting_content_type);
            if (!empty($localImageUrl)) {
                $feed = Feeds::where('_id', $feed_id)->first();
                $feed->imageUrl = $localImageUrl;
                $feed->save();
            }
        }
    }

    public function scrapeNewsUrl(string $url)
    {
        // Prepare the message for Perplexity
        // $messages = [
        //     ['role' => 'system', 'content' => 'You are an expert web analyst specializing in news content identification.'],
        //     [
        //         'role' => 'user',
        //         'content' => "Analyze the following URL: $url

        // If the URL is a direct link to a specific news article:
        //    - Confirm it's a news article URL.
        //    - Return only this URL without any additional text.

        // If the URL is a news site's homepage or main page:
        //    - Identify the latest news article on the site.
        //    - Return only the full URL of that specific news article without any additional text.

        // Important:
        // - Return only the URL, nothing else.
        // - Do not include any explanations, comments, or additional text in your response.
        // - Ensure the returned URL is complete and properly formatted."
        //     ]
        // ];

        $messages = [
            [
                "role" => "system",
                "content" => "You are an AI assistant tasked with extracting a single news article URL from a given news website. Please provide the most relevant recent article URL found on the site."
            ],
            [
                "role" => "user",
                "content" => "Please extract and provide the URL of the most recent news article from $url.
                    Important:
                    - Return only the URL, nothing else.
                    - Do not include any explanations, comments, or additional text in your response.
                    - Ensure the returned URL is complete and properly formatted."
            ]
        ];

        // Make the API call to Perplexity
        $response = $this->perplexity->createChatCompletion([
            'model' => 'llama-3-sonar-small-32k-online',
            'messages' => $messages,
        ]);

        if ($response->getStatusCode() === 200) {
            $result = json_decode($response->getBody()->getContents(), true);
            $messageContent = $result['choices'][0]['message']['content'] ?? '';
            Log::info("scrapeNewsUrl response:" . $messageContent);

            return "";
            // return $messageContent;
        }

        return "";
    }

    public function extractUrl($text)
    {
        // Regular expression to match URLs within <>
        $pattern = '/<([^<>]+)>/';
        preg_match_all($pattern, $text, $matches);

        // Check if there are any matches
        if (empty($matches[1])) {
            return "";
        }

        // Return the last matched URL as a string
        return end($matches[1]);
    }

    public function scrapeText(string $id, string $url, $content_type, $content_type2, $lang)
    {
        // Prepare the message for Perplexity
        $step = 1;
        $command = "Extract text only, not any other confidential information. If there is no news, return empty string. URL: $url";
        if ($content_type != null && $content_type != 0) {
            $command .= " The title shold consists of $content_type words.";
        }
        if ($content_type2 != null && $content_type2 != 0) {
            $command .= " The description should consists of $content_type2 words.";
        }
        $command .= " Return the results in the following format:
   Title: [title]
   Description: [description]";

        $messages = [
            ['role' => 'system', 'content' => 'You are a helpful assistant that scraps and formats webpage content.'],
            [
                'role' => 'user',
                'content' => $command
            ]
        ];

        // Make the API call to Perplexity
        $response = $this->perplexity->createChatCompletion([
            'model' => 'mixtral-8x7b-instruct',
            'messages' => $messages,
        ]);

        if ($response->getStatusCode() === 200) {
            $result = json_decode($response->getBody()->getContents(), true);
            $messageContent = $result['choices'][0]['message']['content'] ?? '';
            Log::info("scrapeText result: " . $messageContent);
            $extractedData = $this->extractTitleAndDescription($messageContent);

            // Extract title and description
            if ($lang != null && $lang != "") {
                $extractedData['title'] = $this->translate($lang, $extractedData['title']);
                $extractedData['description'] = $this->translate($lang, $extractedData['description']);
            }

            // Implement your logic to process each source link
            $doc = new Feeds();
            $doc->avatar_id = $id;
            $doc->created_at = now();
            $doc->title = $extractedData['title'];
            $doc->description = $extractedData['description'];
            $doc->save();

            return $doc->id;
        }

        return "";
    }

    private function translate($lang, $text)
    {
        $messages = [
            ['role' => 'system', 'content' => 'You are a professional translator. Translate the given text and return only the translation without any explanations or additional comment.'],
            [
                'role' => 'user',
                'content' => "Translate the following text to $lang. If the text contains proper nouns or brand names, translate them only if there's an official or commonly used equivalent in the target language. Otherwise, keep them in their original form: $text"
            ]
        ];

        // Make the API call to Perplexity
        $response = $this->perplexity->createChatCompletion([
            'model' => 'llama-3-sonar-small-32k-online',
            'messages' => $messages,
        ]);

        if ($response->getStatusCode() === 200) {
            $result = json_decode($response->getBody()->getContents(), true);
            $messageContent = $result['choices'][0]['message']['content'] ?? '';
            return trim($messageContent);
        }

        return "";
    }

    private function extractTitleAndDescription($formattedContent)
    {
        // Using regular expressions to extract title and description
        preg_match('/Title: (.+)/', $formattedContent, $titleMatches);
        preg_match('/Description: (.+)/s', $formattedContent, $descriptionMatches);

        $title = $titleMatches[1] ?? '';
        $description = $descriptionMatches[1] ?? '';

        // Trim any extra whitespace
        $title = trim($title);
        $description = trim($description);

        return [
            'title' => $title,
            'description' => $description
        ];
    }
    public function scrapeImage(string $url, $content_type)
    {
        // Prepare the message for Perplexity
        $messages = [
            ['role' => 'system', 'content' => 'You are a helpful assistant that extracts image URLs on web pages.'],
            ['role' => 'user', 'content' => "Extract the main image from this page: $url"]
        ];

        // Make the API call to Perplexity
        $response = $this->perplexity->createChatCompletion([
            'model' => 'llama-3-sonar-small-32k-chat',
            'messages' => $messages,
        ]);

        if ($response->getStatusCode() === 200) {
            $result = json_decode($response->getBody()->getContents(), true);
            $messageContent = $result['choices'][0]['message']['content'] ?? '';
            Log::info("scrapeImage result:" . $messageContent);
            $imageUrl = $this->extractImageUrlFromResponse($messageContent);
            Log::info("imageUrl:" . $imageUrl);

            if ($imageUrl) {
                return $imageUrl;
                // // Download the image using Laravel's HTTP client
                // $imageResponse = Http::get($imageUrl);
                // if ($imageResponse->successful()) {
                //     Log::info("image response success");
                //     // Save or process the image as needed
                //     $imageContents = $imageResponse->body();
                //     $uniqueFilename = time() . '.jpg';
                //     // Example: Save to storage
                //     Storage::put('public/' . $uniqueFilename, $imageContents);

                //     return $uniqueFilename;
                // } else {
                //     Log::info("image response failed");
                // }
            }
        }

        return "";
    }

    private function extractImageUrlFromResponse($result)
    {
        // Extract the image URL from Perplexity's response
        // This will depend on how Perplexity formats its response
        // You might need to use regex or string manipulation
        // For example:
        preg_match('/https?:\/\/\S+\.(jpg|jpeg|png|gif)/i', $result['choices'][0]['message']['content'], $matches);
        return $matches[0] ?? null;
    }

    public function extractLargestImage(string $url)
    {
        // Create a Goutte client instance
        $client = new Client();

        // Make a request to the URL
        $crawler = $client->request('GET', $url);

        // Extract all images
        $images = $crawler->filter('img')->each(function ($node) {
            return $node->attr('src');
        });

        // Initialize variables to store the largest image and its size
        $largestImage = null;
        $largestImageSize = 0;

        // Iterate over all images to find the largest one
        foreach ($images as $image) {
            Log::info("extracted image:" . $image);
            if ($image == null)
                continue;
            // Resolve relative URLs to absolute URLs
            if (!filter_var($image, FILTER_VALIDATE_URL)) {
                $image = $this->resolveUrl($url, $image);
            }

            // Get the image size
            $imageSize = @getimagesize($image);

            if ($imageSize) {
                $width = $imageSize[0];
                $height = $imageSize[1];
                $size = $width * $height;

                // Check if this image is the largest so far
                if ($size > $largestImageSize) {
                    $largestImage = $image;
                    $largestImageSize = $size;
                }
            }
        }

        // Return the largest image or an appropriate message if not found
        if ($largestImage) {
            Log::info('largest_image:' . $largestImage . ', size:' . $largestImageSize);
            // Download the image using Laravel's HTTP client
            $imageResponse = Http::get($largestImage);
            if ($imageResponse->successful()) {
                Log::info("image response success");
                // Save or process the image as needed
                $imageContents = $imageResponse->body();
                // Example: Save to storage
                Storage::put('public/scraped_image.jpg', $imageContents);
                return true;
            } else {
                Log::info("image response failed");
            }

        } else {
            Log::info('No images found or images have no size information');
        }
    }

    // Helper function to resolve relative URLs to absolute URLs
    private function resolveUrl($baseUrl, $relativeUrl)
    {
        if (parse_url($relativeUrl, PHP_URL_SCHEME) != '') {
            return $relativeUrl;
        }

        $base = parse_url($baseUrl);
        if ($relativeUrl[0] == '/') {
            $path = '';
        } else {
            $path = dirname($base['path']);
        }

        $abs = "$base[scheme]://$base[host]$path/$relativeUrl";

        // Replace '//' or '/./' or '/foo/../' with '/'
        $re = ['#(/\.?/)#', '#/(?!\.\.)[^/]+/\.\./#'];
        for ($n = 1; $n > 0; $abs = preg_replace($re, '/', $abs, -1, $n)) {
        }

        return $abs;
    }

}

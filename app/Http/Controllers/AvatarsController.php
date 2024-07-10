<?php

namespace App\Http\Controllers;

use App\Models\Avatars;
use App\Models\Avatars_sources;
use Illuminate\Http\Request;
use DateTime;

class AvatarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
		
		$avatars =  Avatars::orderBy('created_at', 'desc')
				->take(10)
				->get();
				
			
		
		return view('avatars_list', [
			'avatars' => $avatars
		]);
    }
	
	public function manag_avatars($id = 0){
		
		$avatars =  Avatars::orderBy('created_at', 'desc')->get();
				
			
		
		return view('manag_avatars', [
			'avatars' => $avatars, 'id' => $id
		]);
		
	}
	
	public function get_avatars($id){
		$avatar =  Avatars::where('_id', $id)->first();
		$avatar->feeds = "13k";
		$avatar->like = "11k";
		$avatar->follower = "12k";
		$avatar->joindate = date("d m Y", strtotime($avatar->created_at));
		
		$to = \Carbon\Carbon::parse($avatar->created_at);
$from = \Carbon\Carbon::parse(time());

        $years = $to->diffInYears($from);
        $months = $to->diffInMonths($from);
        $weeks = $to->diffInWeeks($from);
        $days = $to->diffInDays($from);
		
		if($years > 0){
			$avatar->days = $years . " Years - " . $months . " Months";	
		}else if($months > 0){
			$avatar->days = $months . " Months - " . $days . " days";	
		}else{
			$avatar->days = $days . " days";
		}
		
		echo json_encode($avatar);
	}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
		//$avatar = new Avatars();
		//$avatar->name = 'ali hassan';
		//$avatar->av_Id = 'Ahs_342';
		//$avatar->status = 1;
		//$avatar->save();
		return view('avatars_add');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
		
			$imgfilename = "";
		
          if ($request->hasFile('dp')) {
				$randomize = rand(111111, 999999);
				$extension = $request->file('dp')->extension();
				$filename = $randomize . '.' . $extension;
				$image = $request->file('dp')->move('images/', $filename);
				$imgfilename = $filename;
			}
                
              
			
			
		
		
		
		$name = $request['avatar_name'];
		$avatar_task = $request['avatar_task'];
		$avatar_days = $request['avatar_days'];
		$avatar_hours = $request['avatar_hours'];
		$aricle_per_day = $request['aricle_per_day'];
		$feed_per_hour = $request['feed_per_hour'];
		$sharing_options = $request['sharing_options'];
		
		$text_comments = 0;
		if(isset($request['text_comments'])){
			$text_comments = 1; //$request['text_comments'];
		}
		
		$voice_comments = 0;
		if(isset($request['voice_comments'])){
			$voice_comments = 1; //$request['voice_comments'];
		}
		
		$like_post = 0;
		if(isset($request['like_post'])){
			$like_post = 1; //$request['like_post'];
		}
		
		$share_post = 0;
		if(isset($request['share_post'])){
			$share_post = 1; //$request['share_post'];
		}
		
		$text_settings = 0;
		if(isset($request['text_settings'])){
			$text_settings = 1; //$request['text_settings'];
		}
		$text_settings_1 = $request['text_settings_1'];
		$text_settings_2 = $request['text_settings_2'];
		
		$image_settings = 0;
		if(isset($request['image_settings'])){
			$image_settings = 1; //$request['image_settings'];
		}
		$image_settings_1 = $request['image_settings_1'];
		$image_settings_2 = $request['image_settings_2'];
		
		$video_settings = 0;
		if(isset($request['video_settings'])){
			$video_settings = 1; //$request['video_settings'];
		}
		$video_settings_1 = $request['video_settings_1'];
		$video_settings_2 = $request['video_settings_2'];
		
		
		$source_link = $request['source_link'];
		
		
		$avid = "";
		
		$names = explode(" ", $name);
		if(count($names) > 2){
			$avid = $names[0][0].$names[1][0].$names[2][0];	
		}else if(count($names) > 1){
			$avid = $names[0][0].$names[0][1].$names[1][0];	
		}else{
			$avid = $names[0][0].$names[0][1].$names[0][2];
		}
		
		$avid .= "_".rand(111,999);
		
		$avatar = new Avatars();
		$avatar->name = $name;
		$avatar->av_Id = $avid;
		$avatar->status = 1;
		$avatar->task = $avatar_task;
		$avatar->working_days = $avatar_days;
		$avatar->working_hours = $avatar_hours;
		$avatar->articles_day = $aricle_per_day;
		$avatar->articles_hours = $feed_per_hour;
		$avatar->sharing_option = $sharing_options;
		$avatar->reaction_option_text = $text_comments;
		$avatar->image = $imgfilename;
		$avatar->image_setting = $image_settings;
		$avatar->image_setting_content_type = $image_settings_1;
		$avatar->image_setting_content_type2 = $image_settings_2;
		$avatar->reaction_option_like = $like_post;
		$avatar->reaction_option_post = $share_post;
		$avatar->reaction_option_voice = $voice_comments;
		$avatar->text_setting = $text_settings;
		$avatar->text_setting_content_type = $text_settings_1;
		$avatar->text_setting_content_type2 = $text_settings_2;
		$avatar->video_setting = $video_settings;
		$avatar->video_setting_content_type = $video_settings_1;
		$avatar->video_setting_content_type2 = $video_settings_2;
		
		
		$avatar->save();
		
		$avid = $avatar->id;
		
		foreach($source_link as $link){
			if($link != ""){
				$source = new Avatars_sources();
				$source->avatar_Id = $avid;
				$source->source_link = $link;
				$source->save();
			}
				
		}
		
		return redirect()->route('avatars.index')->with('success','Avatar added successfully.');
		
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
{
    die("180");
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
		//echo $id;
		$avatar =  Avatars::where('_id', $id)
				->first();
				
				
		if($avatar != null){
			$sources = Avatars_sources::where('avatar_Id', $avatar->id)->get();	
			$avatar->sources = $sources;
		}
				
		return view('avatars_edit', [
			'avatar' => $avatar
		]);		
		
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
		$avatar =  Avatars::where('_id', $id)
				->first();
				
		if($avatar != null){
			
			if($request['file_removed'] == 1){
				$imgfilename = "";
			}else{
				$imgfilename = $avatar->image;
			}
			
		
          if ($request->hasFile('dp')) {
				$randomize = rand(111111, 999999);
				$extension = $request->file('dp')->extension();
				$filename = $randomize . '.' . $extension;
				$image = $request->file('dp')->move('images/', $filename);
				$imgfilename = $filename;
			}
             
		$name = $request['avatar_name'];
		$avatar_task = $request['avatar_task'];
		$avatar_days = $request['avatar_days'];
		$avatar_hours = $request['avatar_hours'];
		$aricle_per_day = $request['aricle_per_day'];
		$feed_per_hour = $request['feed_per_hour'];
		$sharing_options = $request['sharing_options'];
		
		$text_comments = 0;
		if(isset($request['text_comments'])){
			$text_comments = 1; //$request['text_comments'];
		}
		
		$voice_comments = 0;
		if(isset($request['voice_comments'])){
			$voice_comments = 1; //$request['voice_comments'];
		}
		
		$like_post = 0;
		if(isset($request['like_post'])){
			$like_post = 1; //$request['like_post'];
		}
		
		$share_post = 0;
		if(isset($request['share_post'])){
			$share_post = 1; //$request['share_post'];
		}
		
		$text_settings = 0;
		if(isset($request['text_settings'])){
			$text_settings = 1; //$request['text_settings'];
		}
		$text_settings_1 = $request['text_settings_1'];
		$text_settings_2 = $request['text_settings_2'];
		
		$image_settings = 0;
		if(isset($request['image_settings'])){
			$image_settings = 1; //$request['image_settings'];
		}
		$image_settings_1 = $request['image_settings_1'];
		$image_settings_2 = $request['image_settings_2'];
		
		$video_settings = 0;
		if(isset($request['video_settings'])){
			$video_settings = 1; //$request['video_settings'];
		}
		$video_settings_1 = $request['video_settings_1'];
		$video_settings_2 = $request['video_settings_2'];
		
		
		$source_link = $request['source_link'];
		
		$avatar->name = $name;
		$avatar->task = $avatar_task;
		$avatar->working_days = $avatar_days;
		$avatar->working_hours = $avatar_hours;
		$avatar->articles_day = $aricle_per_day;
		$avatar->articles_hours = $feed_per_hour;
		$avatar->sharing_option = $sharing_options;
		$avatar->reaction_option_text = $text_comments;
		$avatar->image = $imgfilename;
		$avatar->image_setting = $image_settings;
		$avatar->image_setting_content_type = $image_settings_1;
		$avatar->image_setting_content_type2 = $image_settings_2;
		$avatar->reaction_option_like = $like_post;
		$avatar->reaction_option_post = $share_post;
		$avatar->reaction_option_voice = $voice_comments;
		$avatar->text_setting = $text_settings;
		$avatar->text_setting_content_type = $text_settings_1;
		$avatar->text_setting_content_type2 = $text_settings_2;
		$avatar->video_setting = $video_settings;
		$avatar->video_setting_content_type = $video_settings_1;
		$avatar->video_setting_content_type2 = $video_settings_2;
		
		$avatar->update();
		
		$avid = $avatar->id;
		
		$sources = Avatars_sources::where('avatar_Id', $avatar->id)->get();	
		foreach($sources as $sr){
			$sr->delete();	
		}
		
		foreach($source_link as $link){
			if($link != ""){
				$source = new Avatars_sources();
				$source->avatar_Id = $avid;
				$source->source_link = $link;
				$source->save();
			}
		}
		
			
		}
				
		return redirect()->route('avatars.index')->with('success','Avatar updated successfully.');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Avatars $avatar)
    {
		$avatar->delete();
		return redirect()->route('avatars.index')->with('success','Avatar deleted successfully.');
		//
        //
    }
}

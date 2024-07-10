<!DOCTYPE html>
<html>
<head>
   <title>Browse Movies</title>
</head>
<body>
<h2>Movies</h2>

@forelse ($movies as $movie)
  <p>
    Title: {{ $movie->title }}<br>
    Year: {{ $movie->year }}<br>
    Runtime: {{ $movie->runtime }}<br>
    IMDB Rating: {{ $movie->imdb['rating'] }}<br>
    IMDB Votes: {{ $movie->imdb['votes'] }}<br>
    Plot: {{ $movie->plot }}<br>
  </p>
@empty
    <p>No results</p>
@endforelse

</body>
</html>
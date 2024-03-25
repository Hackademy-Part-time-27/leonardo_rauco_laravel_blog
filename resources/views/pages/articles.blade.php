<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articoli</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>    
    <div class="container">
        <x-navbar />
    <h1 class = "title"> Articoli</h1>
<div>
@if($articles) 
@foreach($articles as $index => $article)
@if($article['visible'])
<article class ="card mb-2">
<div class = "card-body">
<span>{{$article['category'] }}</span>
<h5><a href="{{ route('article', $index)}}">{{ $article['title'] }}</a></h5>
<p>{{ $article['description'] }}</p>
<div class ="text end">
<a  class = "stretched-link" href="{{ route('article', $index)}}">ClickHere...</a>
</div>
</div>
</article>
@endif

@endforeach
@else
<p>Non ci sono articoli</p>
@endif
</div>
</div>
</body>
</html>
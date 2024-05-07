<x-layout>
    <span>{{ $article->category->name }}</span>
<h1 class = "title">{{ $article->title }}</h1>
<p>{{ $article->description }}</p>
@if($article->image)
<img class="img-fluid" src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}">
@endif
</x-layout>
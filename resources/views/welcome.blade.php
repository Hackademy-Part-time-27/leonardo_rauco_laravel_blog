<x-layout :title="$title">
<h1 class="title-blue">{{ $title }}</h1>
<div class="mt-5">
    @foreach($articles as $article)
    <li> {{ $article->id }} {{ $article->title }} </li>
    @endforeach
    <ul>
       {{-- $articles->links() --}}
        
    </ul>
</div>
</x-layout>

<x-layout title="Articoli">
    <h1 class = "title"> Articoli</h1>
    <div>
        <x-test />
    </div>

<div>
@if($articles) 
@foreach($articles as $index => $article)
@if($article['visible'])

<x-card 
:category="$article['category']" 
:index="$index"
:title="$article['title']"
:description="$article ['description']"
:route="route('article',$index)"
/>
@endif
@endforeach
@else
<p>Non ci sono articoli</p>
@endif
</div>
<x-slot:extra>
    <div>
        <h4>Test</h4>
    </div>

    <script>
        ....
    </script>
</x-slot>
</x-layout>
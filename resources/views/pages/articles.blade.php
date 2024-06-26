<x-layout title="Articoli">
    <h1 class = "title"> Articoli</h1>
    

<div>
@if($articles) 
@foreach($articles as $index => $article)

<x-card 
:category="$article->category->name"
:title="$article->title"
:description="$article->description"
:route="route('article',$article)"
/>

@endforeach
@else
<p>Non ci sono articoli disponibili</p>
@endif
</div>
<x-slot:extra>

    <script>
        ....
    </script>
</x-slot>
</x-layout> 
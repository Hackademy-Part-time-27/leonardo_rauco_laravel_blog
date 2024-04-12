<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller

{
    public function create()
{

/* primo metodo
$article = new Article();

$article->title = 'Euro.sport';
$article->category = 'Calcio';
$article->description= 'Vedi tutte le novità qui in basso';

$article->save();
*/
// secondo metodo
Article::create([
    'title' => 'Euro.sport', 
    'category'=>'Rugby',
    'description'=>'Vedi tutte le novità qui in basso',
    'visible'=>true,
    ]);
}
}

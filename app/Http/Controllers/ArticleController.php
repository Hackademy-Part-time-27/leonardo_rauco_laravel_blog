<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreArticleRequest;
use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller

{

public function index(){
    return view('articles.index',['articles'=>Article::all()]);
}


    public function create(){
    return view('articles.create'); 
    }

    public function store(Request $request){

     $article = Article::create($request->all());





    if($request->hasFile('image') && $request->file('image')->isValid()){
        $extension = $request->file('image')->extension();
        $fileName = 'image.' . $extension;
        $fileName = $request->file('image')->getClientOriginalName();
        $fileName = uniqid('image_') . '.' . $extension;
       $article->image = $request->file('image')->storeAs('public/images/'. $article->id, $fileName);
        $article->save();
    }
    return redirect()->route('articles.index')->with(['success' => 'Articolo creato correttamente']);
    }
    }

/* primo metodo
$article = new Article();

$article->title = 'Euro.sport';
$article->category = 'Calcio';
$article->description= 'Vedi tutte le novità qui in basso';

$article->save();
*/
// secondo metodo
/*Article::create([
    'title' => 'Euro.sport', 
    'category'=>'Rugby',
    'description'=>'Vedi tutte le novità qui in basso',
    'visible'=>true,
    ]);
}
}
*/

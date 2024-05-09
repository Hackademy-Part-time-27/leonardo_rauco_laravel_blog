<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreArticleRequest;
use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller

{ 
  
public function index(){
    $articles = Article::where('user_id', auth()->user()->id)
    ->orderBy('created_at', 'DESC')
    ->get();

    return view('articles.index',['articles' => $articles]);
}


    public function create(){
    return view('articles.create',['categories' => \App\Models\Category::all()]); 
    }

    public function store(Request $request){

     $article = Article::create(array_merge($request->all(), ['user_id' => auth()->user()->id ]));
    
    if($request->hasFile('image') && $request->file('image')->isValid()){
        $extension = $request->file('image')->extension();
        $fileName = 'image.' . $extension;
        $fileName = $request->file('image')->getClientOriginalName();
        $fileName = uniqid('image_') . '.' . $extension;
        $article->image = $request->file('image')->storeAs('public/images/'. $article->id, $fileName);
    }
    $article->save();

    return redirect()->route('articles.index')->with(['success' => 'Articolo creato correttamente']);
    }
    public function edit(Article $article){
        if($article->user_id !== auth()->user()->id){
            abort(403);
        }
        return view('articles.edit',[
            'article' => $article,
            'categories' =>  \App\Models\Category::all(),

        ]);
    }
    public function update(StoreArticleRequest $request,Article $article){
        if($article->user_id !== auth()->user()->id){
            abort(403);
        }

        $article->update($request->all());
        
    return redirect()->back()->with(['success' => 'Articolo modificato correttamente']);
    }
    
    public function destroy(Article $article) {

        if($article->user_id !== auth()->user()->id){
            abort(403);
        }

        $article->delete();
        return redirect()->back()->with(['success' => 'Articolo cancellato correttamente']);
    
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

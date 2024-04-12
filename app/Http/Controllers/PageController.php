<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;
class PageController extends Controller

{
    public function welcome()
    {
        $title = config('app.name');

        return view ('welcome', compact ('title'));
    }
    public function aboutMe(){
        return view('pages.about-me', [
            'title' => 'Leonardo',
             'description' => 'Laravel<br>Student',   
        ]);
    }
public function articles(){
    $articles = Article::where('visible',true)->get();
    
    return view('pages.articles',['articles' => $articles]); 
} 
public function article( Article $article){
return view('pages.article', ['article'=> $article]);
}

}
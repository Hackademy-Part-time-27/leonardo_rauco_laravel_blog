<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller

{
    public $articles;
    public function __construct(){
        $this->articles = [
            ['title' => 'Euro.sport', 'category'=>'Calcio', 'description'=>'Vedi tutte le novità qui in basso', 'visible'=>true],
            ['title' => 'Euro.sport', 'category'=>'Basket','description'=>'Vedi tutte le novità qui in basso','visible'=>false],
            ['title' => 'Euro.sport', 'category'=>'Rugby', 'description'=>'Vedi tutte le novità qui in basso', 'visible'=>true],
        ];    

    }
    public function welcome(){
        $title = config('app.name');
        return view ('welcome', compact ('title'));
    }
    public function contacts(){
        return view('pages.contacts');
    }

    public function aboutMe(){
        return view('pages.about-me', [
            'title' => 'Leonardo',
             'description' => 'Laravel<br>Student',   
        ]);
    }
public function articles(){
    
    return view('pages.articles',['articles' => $this->articles]); 
} 
public function article($article){
    $article = $this->articles[$article];
    if ( ! $article['visible']){
        abort(404);

    }
return view('pages.article', ['article'=> $article]);
}
}

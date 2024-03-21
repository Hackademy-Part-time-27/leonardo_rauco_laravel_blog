<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller

{
    public $articles;
    public function __construct(){
        $this->articles = [
            ['title' => 'Euro.sport', 'category'=>'Calcio', 'description'=>'Vedi tutte le novità qui in basso'],
            ['title' => 'Euro.sport', 'category'=>'Basket','description'=>'Vedi tutte le novità qui in basso'],
            ['title' => 'Euro.sport', 'category'=>'Rugby', 'description'=>'Vedi tutte le novità qui in basso'],
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
return view('pages.article', ['article'=> $this->articles[$article]]);
}
}

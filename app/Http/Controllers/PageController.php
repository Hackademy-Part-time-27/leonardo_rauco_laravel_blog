<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;
class PageController extends Controller

{
    public function welcome()
    {
        $title = config('app.name');
       //$articles = Article::paginate(10);
        //$articles = Article::orderBy('id')->get();
        //$articles = Article::orderBy('id', 'DESC' )->get();
       $articles = Article::orderBy('created_at', 'DESC' )->take(10)->get();
        //$articles = Article::where('title', 'LIKE','xarticolo%' )->get();
        //$person = Person::where('age', '>' , 50 )->get();


       //$user = App\Models\User::where('email','leo.rauco16@gmail.com')->first;
       //$user = App\Models\User::where('email','leo.rauco16@gmail.com')->firstOrfail;
       //dd($user);
      

        return view ('welcome', compact ('title', 'articles'));
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
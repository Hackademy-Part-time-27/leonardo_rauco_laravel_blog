<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}) ->name('welcome');
Route::get('contatti', [PageController::class, 'contacts']) ->name('contacts');

Route::get ('/chi-sono', function () {

return view('pages.about-me', [
    'title' => 'Leonardo',
     'description' => 'Laravel<br>Student',   
    ]);
}) ->name('about-me');

Route::get('/articoli',function (){

    $articles = [
        ['title' => 'Perchè JS è migliore di PHP', 'description'=>'perchè non lo è'],
        ['title' => 'Perchè PHP è migliore di JS', 'description'=>'si è vero'],
        ['title' => 'A me non piace nessuno dei due', 'description'=>'meglio ancora'],
    ];
//$articles = [];
    return view('pages.articles',['articles' => $articles]);  
})->name('articles');

Route::get('/articolo/{article?}',function($article){

    $index = $article;
    $articles = [
        ['title' => 'Perchè JS è migliore di PHP', 'description'=>'...'],
        ['title' => 'Perchè PHP è migliore di JS', 'description'=>'...'],
        ['title' => 'A me non piace nessuno dei due', 'description'=>'...'],
    ];
    if (array_key_exists($index,$articles)){

    return view('pages.article', ['article'=> $articles[$index]]);
    } else {
    abort(404);
    }
})->name('article');
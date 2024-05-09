<?php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'welcome'])->name('welcome');
Route::get('/contatti', [ContactController::class, 'viewForm'])->name('contacts');
Route::post('/contatti/send', [ContactController::class, 'send'])->name('contacts.send');
Route::get ('/chi-sono',[PageController::class,'aboutMe'])->name('about-me');
Route::get('/articoli',[PageController::class,'articles'])->name('articles'); 
Route::get('/articolo/{article}',[PageController::class,'article'])->name('article');
Route::get('/test', [App\Http\Controllers\TestController::class, 'test'])->name('test'); 
//Route::get('/account',[App\Http\Controllers\AccountController::class, 'index'])->name('account.index')
//->name('account.index')->middleware('auth');
Route::prefix('account')->middleware('auth')->group(function(){
Route::get('/',[App\Http\Controllers\AccountController::class, 'index'])->name('account.index');
Route::get('/articles',[ArticleController::class, 'index' ])->name('articles.index');
Route::get('/articles/create',[ArticleController::class, 'create' ])->name('articles.create');
Route::post('/articles/store',[ArticleController::class, 'store' ])->name('articles.store');
Route::get('/articles/{article}/edit',[ArticleController::class, 'edit' ])->name('articles.edit');
Route::put('/articles/{article}/update',[ArticleController::class, 'update' ])->name('articles.update');
Route::delete('/articles/{article}/destroy',[ArticleController::class, 'destroy' ])->name('articles.destroy');

Route:: resource('/categories', CategoryController::class);

});

/*Route::get('insert',function() {

    for($i = 3; $i <= 50; $i++) {
        App\Models\Article::create([
            'title' => 'Articolo' . $i,
            'category' => 'Esteri',
            'description' => '...',

        ]);
    }
});
*/

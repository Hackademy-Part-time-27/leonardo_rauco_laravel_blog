<?php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'welcome'])->name('welcome');
Route::get('/contatti', [ContactController::class, 'viewForm'])->name('contacts');
Route::post('/contatti/send', [ContactController::class, 'send'])->name('contacts.send');
Route::get ('/chi-sono',[PageController::class,'aboutMe'])->name('about-me');
Route::get('/articoli',[PageController::class,'articles'])->name('articles'); 
Route::get('/articolo/{article}',[PageController::class,'article'])->name('article');
Route::get('/test', [App\Http\Controllers\TestController::class, 'test'])->name('test'); 


Route::get('/account/articles',[ArticleController::class, 'index' ])->name('articles.index');
Route::get('/account/articles/create',[ArticleController::class, 'create' ])->name('articles.create');

Route::post('/account/articles/store',[ArticleController::class, 'store' ])->name('articles.store');
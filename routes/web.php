<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'welcome'])->name('welcome');
Route::get('/contatti', [PageController::class, 'contacts'])->name('contacts');
Route::get ('/chi-sono',[PageController::class,'aboutMe'])->name('about-me');
Route::get('/articoli',[PageController::class,'articles'])->name('articles');
Route::get('/articolo/{article}',[PageController::class,'article'])->name('article');
Route::get('/test', [App\Http\Controllers\TestController::class, 'test'])->name('test'); 
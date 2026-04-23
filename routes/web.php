<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('book.indexbook');
});
Route::get('/home', [HomeController::class, 'dashboard']);
Route::post('hasil', [FormController::class, 'hasil']);

Route::get('/form', function () {
    return view('form');
});
Route::get('/formbook', function () {
    return view('formbook');
});
Route::view('/indexbook','book.indexbook');
Route::view('/formregis','book.formregis');


Route::post('/hasilbook', [BookController::class, 'hasilbook']);

Route::get('/layout', function(){
    return view ('layout');
});
Route::get('/master', function(){
    return view ('layout.master');
});

Route::get('new', function(){
    return 'haii';
});




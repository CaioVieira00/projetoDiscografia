<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlbumController;


Route::get('/',[HomeController::class, 'index'])->name('discografia-index');
Route::get('/create',[HomeController::class, 'create'])->name('discos-create');;
Route::post('/',[HomeController::class, 'store'])->name('discos-store');
Route::delete('/{id}',[HomeController::class, 'destroy'])->where('id', '[0-9]+')->name('discos-destroy');



Route::get('/createalbum',[AlbumController::class, 'create'])->name('albuns-create');;
Route::post('album/',[AlbumController::class, 'store'])->name('albuns-store');
Route::delete('album/{id}',[AlbumController::class, 'destroy'])->where('id', '[0-9]+')->name('albuns-destroy');



Route::fallback(function(){
    return "Erro!";
});
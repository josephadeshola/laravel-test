<?php

use App\Http\Controllers\CreatedetailsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/details", [CreatedetailsController::class, 'create']);
Route::resource('/contact',CreatedetailsController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

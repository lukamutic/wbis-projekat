<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//pages controller
//Route::get('/new', 'PagesController@new')->name('new');

Route::get('/new', [App\Http\Controllers\PagesController::class, 'new'])->name('new');
Route::get('/single', [App\Http\Controllers\PagesController::class, 'single'])->name('single');



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoriesController;
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

Route::get('/admin', 'DashboardController@dashboard')->name('dashboard')->middleware("auth");
Route::get('/home', 'HomeController@index')->name('home');
require(__DIR__.'../../app/Http/Controllers/Auth/auth.php');


// Routes categories
Route::resource('categories','CategoriesController');
Route::resource('authors','AuthorsController');
Route::resource('editors','EditorsController');
Route::resource('articles','ArticlesController');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Auth;

/*
|----------------------------------------------------git ----------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes(['verify' => true]);
Route::get('/admin', 'DashboardController@dashboard')->name('dashboard')->middleware("auth");
Route::get('/home', 'HomeController@index')->name('home');
require(__DIR__.'../../app/Http/Controllers/Auth/auth.php');


// CRUDs admin
Route::resource('categories','CategoriesController');
Route::resource('authors','AuthorsController');
Route::resource('editors','EditorsController');
Route::resource('articles','ArticlesController');

//Routes home

Route::get('/contacts', [ContactsController::class, 'index']);

//Routes articles/blog
Route::resource('blog','BlogController');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LanguagesController;
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

Route::get('/admin', 'DashboardController@dashboard')->name('admin')/*->middleware("auth")*/;
Route::get('/master', 'DashboardController@master')->name('master');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('language','LanguagesController'); 
Route::resource('countrie','CountriesController'); 
Route::resource('Faqs','FaqsController');
require(__DIR__.'../../app/Http/Controllers/Auth/auth.php');
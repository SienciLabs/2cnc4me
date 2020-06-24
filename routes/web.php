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
<<<<<<< HEAD
    return 'this is a test';
=======
    return view('welcome');
>>>>>>> parent of f3bff6ef... changed welcome page and undid previous auth commenting. it was not the issue
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD

Route::resource('posts', 'PostController');

Route::get('/test', function() {return "Hello world";});

Route::get('/categories', function (){
    return view('categories');
});
=======
>>>>>>> parent of 5d2f3600... changed some routing stuff

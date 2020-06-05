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

Route::middleware('auth')->group(function(){
    
    Route::get('/posts', 'PostsController@index')->name('home');
    
    Route::post('/posts', 'PostsController@store');

    //Routing for when a user wants to follow another user
    Route::post('/profiles/{user:username}/follow', 'FollowsController@store')->name('profile');

    //Routing for editing a profile with autorization
    // Route::get('/profiles/{user:name}/edit', 'ProfilesController@edit');
    Route::get(
        '/profiles/{user:username}/edit', 'ProfilesController@edit'
        )->middleware('can:canEdit,user');

    //Route for updating the user's profile
    Route::patch('/profiles/{user:username}', 'ProfilesController@update');


});


//Routing for a profile 
Route::get('/profiles/{user:username}', 'ProfilesController@show')->name('profile');

Auth::routes();


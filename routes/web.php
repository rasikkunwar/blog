<?php

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
Route::get('blog/{slug}',['as' =>'blog.single' ,'uses' =>'BlogController@getSingle'])
->where('slug','[\w\d\-\_]+');
 // Authentication Routes...
    Route::get('auth/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('auth/login', 'Auth\LoginController@login');
    Route::get('auth/logout', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('auth/register', 'Auth\RegisterController@register');

Route::get('blog',['as' => 'blog.index','uses'=> 'BlogController@getIndex']);
Route::get('/', 'PagesController@getIndex');
Route::get('about','PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');
Route::resource('post','PostController');





?>
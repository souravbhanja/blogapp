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

// //Basic route
// Route::get('/hello', function(){
//     return 'Hello World!';
// });

// //Dynamic route with id, name
// Route::get('/users/{id}/{name}', function($id, $name){
//     return 'This is user ' . $name . ' with an ID of ' . $id;
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');

//Generates routes for all user authentication
Auth:: routes();

Route::get('/dashboard', 'DashboardController@index');



















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

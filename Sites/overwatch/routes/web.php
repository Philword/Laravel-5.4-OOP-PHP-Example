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

 Route::get('/', 'PostController@index');
// Route::get('api/tasks', function () {
//     return App\Task::latest()->get();
// });
// Route::get('/', function () {
//     return view('test');
// });
Route::get('/posts', 'PostController@index');
Route::get('/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/posts/tags/{tag}', 'TagsController@index');


Auth::routes();

Route::get('/index', 'HomeController@index')->name('index');
Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

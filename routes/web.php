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

//Route::get('/', function(){
//    return view('layout');
//});


Route::get('/', function (){
    return view ('welcome');
});

Route::get('/post/{post}', 'PostController@post')->name('show_post');

Route::get('/list/{pageNumber}', 'PostController@list')->name('show_list');

Route::get('/test', 'TestController@show');

Route::post('/post/{id}/add_comment', 'PostController@add_comment')->name('add_comment');

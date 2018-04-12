<?php

Auth::routes();


Route::view('/edit', 'PostsController@edit');
Route::get('/','PostsController@index');
Route::resource('posts','PostsController');
Route::put('/posts/{post}','PostsController@update');
Route::get('/view','HomeController@view_blog');
Route::view('/datatables','datatables');
Route::get('/view_blog','PostsController@home')->name('home');

Route::get('/home', 'PostsController@main')->name('home');
Route::get('/write-blog', 'HomeController@write_blog')->name('home');
Route::post('/posts/{post}/comments','CommentsController@store');
//facebook social
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');







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





/*Admin Routes*/

Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');

Route::get('/home', 'AdminController@check')->middleware('admin');

Route::get('/admin.show', 'NewsController@index')->middleware('admin');

Route::get('/albums.all_albums', 'AdminController@albums')->middleware('admin');

Route::get('/albums/{album}/edit', 'AlbumsController@edit')->middleware('admin');




/*News Routes*/

Route::get('/news', 'Controller@main')->name('news');

Route::get('/news/create', 'NewsController@create')->middleware('admin');

Route::post('/news', 'NewsController@store')->middleware('admin');

Route::get('/news/{news_id}/show', 'NewsController@show')->middleware('admin');

Route::get('/news/{news_id}/edit', 'NewsController@edit')->middleware('admin');

Route::post('/news/{news_that_has_been_edited}', 'NewsController@update')->middleware('admin');

Route::get('/news/{news_that_we_want_to_delete}/delete', 'NewsController@delete')->middleware('admin');







/*Photos Controller*/
Route::get('/albums/{album}', 'AlbumsController@index')->middleware('admin');

Route::post('/albums/{each_album}/photos', 'PhotosController@store')->middleware('admin');

Route::post('/photos/{album}', 'AlbumsController@store')->middleware('admin');

Route::get('/photos/{photo_that_we_want_to_delete}/delete', 'PhotosController@delete')->middleware('admin');



/*Playground Routes*/

Route::get('/all_playgrounds', 'PlaygroundsController@index')->middleware('admin');

Route::get('/playground/{playground}/edit', 'PlaygroundsController@edit')->middleware('admin');

Route::get('/playground/create', 'PlaygroundsController@create')->middleware('admin');

Route::post('/playground', 'PlaygroundsController@store')->middleware('admin');

Route::get('/playground/{playground}/delete', 'PlaygroundsController@delete')->middleware('admin');

Route::post('/playground/{playground}', 'AdminController@store')->middleware('admin');

Route::get('/playground/{slug}/{playground}', 'PlaygroundsController@show')->middleware('admin');


/*Везде, где мы указываем ->middleware('admin'); - мы проверяем, через посредника является ли пользователь-администратором?
То есть равняется ли role данного user = 2(двум)*/
















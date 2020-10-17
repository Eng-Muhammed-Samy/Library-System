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

Route::get('/', function () {
    return view('welcome');
});
///////////////////////////admin////////////////////////////////////////
Auth::routes();
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('/books', 'BookController@index')->middleware('is_admin');
Route::get('/books/create', 'BookController@create')->middleware('is_admin');
Route::post('/books', 'BookController@store')->middleware('is_admin');
Route::get('/books/{book}', 'BookController@show')->middleware('is_admin');
Route::get('/books/{book}/edit', 'BookController@edit')->middleware('is_admin');
Route::put('/books/{book}', 'BookController@update')->middleware('is_admin');
Route::delete('/books/{book}', 'BookController@destroy')->middleware('is_admin');
Route::get('/borrowedbooks', 'BookController@borrow')->middleware('is_admin');
Route::get('/allusers', 'BookController@showallusers')->middleware('is_admin');
Route::get('/showuser/{usernum}', 'BookController@showuser')->middleware('is_admin');
Route::get('/showuser/{usernum}', 'BookController@showuser')->middleware('is_admin');
Route::get('/edituser/{usernum}', 'BookController@edituser')->middleware('is_admin');
Route::post('/updateuser/{usernum}', 'BookController@updateuser')->middleware('is_admin');
/////////////////////////user/////////////////////////////////////////
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/showbooks', 'BookController@showbooks');
Route::get('/borrow/{booknum}', 'BookController@borrowbook');
Route::post('/borrowbook{booknum}', 'BookController@updateborrow');
Route::get('/allborrowedbooks', 'BookController@allborrow');
Route::get('/restore/{booknum}', 'BookController@restore');

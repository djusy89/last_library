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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('books', 'BooksController@index');
Route::get('books/{book}', 'BooksController@show');
Route::post('book', 'BooksController@store');
Route::patch('books/edit/{book}', 'BooksController@edit');
Route::delete('books/{book}', 'BooksController@destroy');
Route::get('books', 'BooksController@search')->name('search');


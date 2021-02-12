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


Route::get('/','FluentController@index')->name('fluent');
Route::get('upload/{local}','UploadFileController@uploadfile')->name('upload');
Route::post('uploadfile','UploadFileController@upload');
Route::get('sendmail','MailController@sendmail');
Route::get('employee','PDFController@employee');
Route::get('downloadpdf','PDFController@downloadPDF');
Route::get('resize','ImageController@ImageResize');
Route::post('uploadimage','ImageController@uploadimage');
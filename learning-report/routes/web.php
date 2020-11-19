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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//管理者
Route::prefix('/teacher')->group(function () {
    Route::get('/index', 'AdminController@teacherIndex')->name('teacherIndex');
    Route::get('/detail', 'AdminController@teacherDetail')->name('teacherDetail');
    Route::get('/edit', 'AdminController@teacherEdit')->name('teacherEdit');
});
Route::get('/class_detail', 'AdminController@classDetail')->name('classDetail');
Route::get('/student_detail', 'AdminController@studentDetail')->name('studentDetail');
Route::get('/student_edit', 'AdminController@studentEdit')->name('studentEdit');
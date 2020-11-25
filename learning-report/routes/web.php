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

//教員
Route::prefix('/teacher')->group(function () {
    Route::get('/index', 'TeacherController@index');
    Route::get('/detail', 'TeacherController@detail');
    Route::get('/edit', 'TeacherController@edit');
});

//生徒
Route::prefix('/student')->group(function () {
    Route::get('/index', 'StudentController@studentIndex');
    Route::get('/detail', 'StudentController@studentDetail');
    Route::get('/edit', 'StudentController@studentEdit');
});

//クラス
Route::prefix('/class')->group(function () {
    Route::get('/detail', 'ClassController@detail');
});

//教科
Route::prefix('/subject')->group(function () {
    Route::get('/edit', 'SubjectController@edit');
});

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
Route::get('/show_message_list', 'ShowMessageListController@index');

//教員
Route::prefix('/teacher')->group(function () {
    Route::get('/index', 'TeacherController@index');
    Route::get('/detail', 'TeacherController@detail');
    Route::get('/delete', 'TeacherController@delete');
    Route::get('/edit', 'TeacherController@edit');
    Route::get('/to_info_view', 'TeacherController@toInfoView');
    Route::get('/create_info', 'TeacherController@createInfo');
});

//生徒
Route::prefix('/student')->group(function () {
    Route::get('/index', 'StudentController@index');
    Route::get('/detail', 'StudentController@detail');
    Route::get('/delete', 'StudentController@delete');
    Route::get('/edit', 'StudentController@edit');
});

//クラス
Route::prefix('/class')->group(function () {
    Route::get('/detail', 'ClassController@detail');
});

//教科
Route::prefix('/subject')->group(function () {
    Route::get('/index', 'SubjectController@index');
    Route::get('/add', 'SubjectController@add');
    Route::get('/delete', 'SubjectController@delete');
    Route::get('/edit', 'SubjectController@edit');
});

//担当教科
Route::prefix('/charge_subject')->group(function () {
    Route::get('/index', 'ChargeSubjectController@index');
    Route::get('/register', 'ChargeSubjectController@register');
    Route::get('/edit', 'ChargeSubjectController@edit');
    Route::get('/delete', 'ChargeSubjectController@delete');
});

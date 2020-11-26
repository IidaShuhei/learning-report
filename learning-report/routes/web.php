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
    Route::get('/index', 'StudentController@index');
    Route::get('/detail', 'StudentController@detail');
    Route::get('/edit', 'StudentController@edit');
    Route::get('/profile', 'StudentController@profile');
    Route::get('/report_index', 'StudentController@reportIndex');
    Route::get('/report_detail', 'StudentController@reportDetail');
    Route::get('/questionnaire_class', 'StudentController@questionnaireClass');
    Route::post('/questionnaire_class', 'StudentController@questionnaireClassStore');
    Route::get('/questionnaire_test', 'StudentController@questionnaireTest');
    Route::post('/questionnaire_test', 'StudentController@questionnaireTestStore');
    Route::get('/questionnaire_express', 'StudentController@questionnaireExpress');
    Route::post('/questionnaire_express', 'StudentController@questionnaireExpressStore');
});

//クラス
Route::prefix('/class')->group(function () {
    Route::get('/detail', 'ClassController@detail');
});

//教科
Route::prefix('/subject')->group(function () {
    Route::get('/edit', 'SubjectController@edit');
    Route::get('/detail', 'ClassController@classDetail');
});
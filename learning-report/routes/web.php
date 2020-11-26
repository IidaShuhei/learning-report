<?php

use Illuminate\Support\Facades\Route;

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
    Route::get('/edit', 'StudentController@edit');
    Route::get('/delete', 'StudentController@delete');
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
    Route::get('/index', 'SubjectController@index');
    Route::get('/add', 'SubjectController@add');
    Route::get('/delete', 'SubjectController@delete');
    Route::get('/edit', 'SubjectController@edit');
    Route::get('/detail', 'ClassController@classDetail');
});

//担当教科
Route::prefix('/charge_subject')->group(function () {
    Route::get('/index', 'ChargeSubjectController@index');
    Route::get('/register', 'ChargeSubjectController@register');
    Route::get('/edit', 'ChargeSubjectController@edit');
    Route::get('/delete', 'ChargeSubjectController@delete');
});
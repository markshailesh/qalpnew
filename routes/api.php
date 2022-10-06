<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('students','Api\StudentApiController');
Route::post('students/{student}','Api\StudentApiController@update');
Route::get('student_check/{phone_number}','Api\StudentApiController@userExits');
Route::get('get_courses','Api\StudentApiController@getCourses');
Route::get('student_login/{phone_number}','Api\StudentApiController@studentLogin');
Route::post('payments','Api\StudentApiController@payment');
Route::get('get_subject/{student_id}/{course_id}','Api\StudentApiController@getSubject');
Route::get('get_chapter/{subject_id}','Api\StudentApiController@getChapter');
Route::get('get_content/{student_id}/{topic_id}','Api\StudentApiController@getContent');
Route::get('get_test/{student_id}/{topic_id}','Api\StudentApiController@getTest');
Route::get('get_question/{content_id}','Api\StudentApiController@getQuestion');
Route::get('get_slider','Api\StudentApiController@slider');
Route::get('get_question_bank/{stu_id}/{subject_id}','Api\StudentApiController@question_bank');
Route::get('get_live_session/{stu_id}','Api\StudentApiController@live_session');
Route::post('save_chat', 'Api\StudentApiController@saveChat');
Route::get('get_chat/{id}', 'Api\StudentApiController@getChat');
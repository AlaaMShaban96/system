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


// this route for subjecs model
// Route::get('subject',                           'SubjectController@index'); //->middleware('can:viewAny');

// Route::get('subject/{subject}/show',            'SubjectController@show');

Route::get('subject/create'            ,      'SubjectController@create');

Route::post('subject/store'            ,      'SubjectController@store');

Route::get('subject/{subject}/edit'    ,      'SubjectController@edit');

Route::patch('subject/{subject}/update',      'SubjectController@update');

Route::delete('subject/{subject}'       ,      'SubjectController@destroy');

//this route between class Subject and Class Course

Route::post('subject/{subject}/course'  ,      'SubjectCoursesController@store');



// this route for Courses model
Route::get('course/{subject}'           ,       'CourseController@show');

Route::get('course'                     ,       'CourseController@index');

Route::get('course/{course}/edit'       ,       'CourseController@edit');

Route::patch('/course/{course}'         ,       'CourseController@update');

Route::delete('course/{course}'         ,       'CourseController@destroy');

Route::get('course/create'              ,       'CourseController@create');

Route::get('course/{subject}/create'    ,       'CourseController@create_course');

Route::patch('course/store'             ,       'CourseController@store');

// this route for login and Register by Package Auth
Auth::routes();

Route::get('/home'                      ,       'HomeController@index')->name('home');

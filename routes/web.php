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
Route::resource('courses', 'CourseController');
Route::resource('files', 'FileController');
Route::resource('institutions', 'InstitutionController');
Route::resource('teachers', 'TeacherController');
Route::resource('students', 'StudentController');
Route::resource('works', 'WorkController');
Route::resource('types', 'TypeController');
Route::get('/', function () {
    return view('welcome');
});

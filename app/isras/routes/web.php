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

//Sort the pages controller according to alphabet ascending

Route::get('/', 'PagesController@home');

Route::get('/about-us', 'PagesController@about');

Route::get('/assessment', 'PagesController@assessment');

Route::get('/assessment/result', 'PagesController@assessmentResult');

Route::get('/assessment/start', 'PagesController@assessmentStart');

Route::get('/assessment/page_{id}', 'AssessmentController@loadAssessmentQuestion');

Route::get('/feedback', 'PagesController@feedback');

Route::get('/library', 'PagesController@library');

Route::get('/payment', 'PagesController@payment');

Route::get('/registration', 'PagesController@registration');

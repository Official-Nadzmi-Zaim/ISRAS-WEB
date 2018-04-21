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
// public routes
// Auth::routes();
Route::get('/', 'PagesController@home');
Route::get('/about-us', 'PagesController@about');
Route::get('/library', 'PagesController@library');
Route::get('/login', 'PagesController@login');

// admin routes
Route::prefix('admin')->group(function() {
    // GET ROUTES
    Route::get('/reporting', 'ReportingController@processReporting');

    Route::get('/library', 'LibraryController@libraryIndex')->name('admin.library');
    Route::get('/form/library/add', 'LibraryController@loadAddContentForm');
    Route::get('/form/library/update', 'LibraryController@loadUpdateContentForm');
    Route::get('/form/blog/add', 'BlogController@loadAddContentForm');
    Route::get('/form/blog/update', 'BlogController@loadUpdateContentForm');
    // Route::get('/form/registration', 'RegisterController@registerForm');

    // POST ROUTES
    Route::post('/blog/add', 'BlogController@verifyNewContent');
    Route::post('/blog/update', 'BlogController@verifyUpdatedContent');
    Route::post('/library/add', 'LibraryController@verifyNewContent');
    Route::post('/library/update', 'LibraryController@verifyUpdatedContent');
    // Route::post('/registration', 'RegisterController@registration');
});

// user routes
Route::prefix('user')->group(function() {
    // GET ROUTES
    Route::get('/assessment', 'PagesController@assessment');
    Route::get('/assessment/result', 'PagesController@assessmentResult');
    Route::get('/assessment/start', 'PagesController@assessmentStart');
    Route::get('/assessment/page_{id}', 'AssessmentController@loadAssessmentQuestion');
    Route::get('/feedback', 'PagesController@feedback');
    Route::get('/payment', 'PagesController@payment');
    Route::get('/registration', 'PagesController@registration');
});

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
Route::get('/', 'PagesController@home');
Route::get('/about-us', 'PagesController@about');
Route::get('/library', 'PagesController@library');
Route::get('/login', 'PagesController@login');

// admin routes
Route::prefix('admin')->group(function() {
    // GET ROUTES
    Route::get('/reporting', 'ReportingController@processReporting');
    // library
    Route::get('/library', 'LibraryController@adminLibraryIndex')->name('admin.library');
    Route::get('/form/library/add', 'LibraryController@loadAddContentForm');
    Route::get('/form/library/update', 'LibraryController@loadUpdateContentForm');
    // blog
    Route::get('/blog', 'BlogController@adminBlogIndex')->name('admin.blog');
    Route::get('/form/blog/add', 'BlogController@loadAddContentForm');
    Route::get('/form/blog/update', 'BlogController@loadUpdateContentForm');
    // assessment
    Route::get('/assessment/{requestAll}/{adminId?}', 'AssessmentController@adminAssessmentIndex')->name('admin.assessment');
    Route::get('/form/assessment/add', 'AssessmentController@loadAddContentForm');
    Route::get('/form/assessment/update/{questionId}', 'AssessmentController@loadContentUpdateForm');
    // feedback
    Route::get('/feedback', 'FeedbackController@adminFeedbackIndex')->name('admin.feedback');
    Route::get('/form/feedback/add', 'FeedbackController@loadAddContentForm');
    Route::get('/form/feedback/update', 'FeedbackController@loadContentUpdateForm');
    // registration
    Route::get('/form/registration', 'Auth\RegisterController@adminRegisterForm');
    // login
    Route::get('/form/login', 'Auth\LoginController@adminLoginForm');

    // POST ROUTES
    // blog
    Route::post('/blog/add', 'BlogController@verifyNewContent');
    Route::post('/blog/update', 'BlogController@verifyUpdatedContent');
    // library
    Route::post('/library/add', 'LibraryController@verifyNewContent');
    Route::post('/library/update', 'LibraryController@verifyUpdatedContent');
    // assessment
    Route::post('/assessment/add', 'AssessmentController@verifyNewContent');
    Route::post('/assessment/update', 'AssessmentController@verifyUpdatedContent');
    Route::post('/assessment/delete', 'AssessmentController@deleteContent');
    // registration
    Route::post('/register', 'Auth\RegisterController@register');
    // login
    Route::post('/login', 'Auth\LoginController@login');
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

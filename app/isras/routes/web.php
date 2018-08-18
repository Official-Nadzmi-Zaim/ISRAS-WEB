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
Auth::routes();
// public routes
// get
Route::get('/', 'PagesController@index');
Route::get('/about-us', 'PagesController@about');
Route::get('/library', 'LibraryController@loadLibraryContent');
Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::get('/logout', 'Auth\LoginController@logout');
// post
Route::post('/login', 'Auth\LoginController@login');

// admin routes
Route::prefix('admin')->group(function() {
    // GET ROUTES
    // pages
    //Route::get('/', 'PagesController@index');
    Route::get('/about-us', 'PagesController@adminAbout');
    // processes
    Route::get('/reporting', 'ReportingController@processReporting');
    // library
    Route::get('/library', 'LibraryController@adminLibraryIndex')->name('admin.library');
    Route::get('/form/library/add', 'LibraryController@loadAddContentForm');
    Route::get('/form/library/update/{libraryId}', 'LibraryController@loadUpdateContentForm');
    // blog
    Route::get('/blog', 'BlogController@adminBlogIndex')->name('admin.blog');
    Route::get('/form/blog/add', 'BlogController@loadAddContentForm');
    Route::get('/form/blog/update/{blogId}', 'BlogController@loadUpdateContentForm');
    // assessment
    Route::get('/assessment', 'AssessmentController@adminAssessmentIndex')->name('admin.assessment');
    Route::get('/form/assessment/add', 'AssessmentController@loadAddContentForm');
    Route::get('/form/assessment/update/{questionId}', 'AssessmentController@loadContentUpdateForm');
    // feedback
    Route::get('/feedback', 'FeedbackController@adminFeedbackIndex')->name('admin.feedback');
    Route::get('/form/feedback/add', 'FeedbackController@loadAddContentForm');
    Route::get('/form/feedback/update/{questionId}', 'FeedbackController@loadContentUpdateForm');

    // POST ROUTES
    // blog
    Route::post('/blog/add', 'BlogController@verifyNewContent');
    Route::post('/blog/update', 'BlogController@verifyUpdatedContent');
    Route::post('/blog/delete', 'BlogController@deleteContent');
    // library
    Route::post('/library/add', 'LibraryController@verifyNewContent');
    Route::post('/library/update', 'LibraryController@verifyUpdatedContent');
    Route::post('/library/delete', 'LibraryController@deleteContent');
    // assessment
    Route::post('/assessment/add', 'AssessmentController@verifyNewContent');
    Route::post('/assessment/update', 'AssessmentController@verifyUpdatedContent');
    Route::post('/assessment/delete', 'AssessmentController@deleteContent');
    // feedback
    Route::post('/feedback/add', 'FeedbackController@verifyNewContent');
    Route::post('/feedback/update', 'FeedbackController@verifyUpdatedContent');
    Route::post('/feedback/delete', 'FeedbackController@deleteContent');

    // registration
    Route::get('/register', 'Auth\RegisterController@adminRegisterForm');
    Route::post('/register', 'Auth\RegisterController@register');
});

// user routes
Route::prefix('user')->group(function() {
    // GET ROUTES
    // pages
    //Route::get('/', 'PagesController@index');
    Route::get('/about-us', 'PagesController@userAbout');
    Route::get('/library', 'PagesController@userLibrary');
    // process
    Route::get('/assessment', 'AssessmentController@loadAssessment');
    Route::post('/assessment', 'AssessmentController@saveAssessmentResult');
    Route::get('/assessment/result', 'AssessmentController@verifyAssessment');
    Route::post('/assessment/result', 'AssessmentController@verifyAssessment');
    Route::get('/assessment/start', 'PagesController@assessmentStart');
    Route::get('/assessment/page_{id}', 'AssessmentController@loadAssessmentQuestion');
    Route::post('/assessment/page_{id}', 'AssessmentController@loadAssessmentQuestion');
    Route::get('/feedback', 'FeedbackController@loadFeedbackQuestion');
    Route::post('/feedback', 'FeedbackController@verifyFeedback');
    Route::get('/payment', 'PagesController@payment');
    Route::get('/report/{id}', 'AssessmentController@loadAssessmentResult');
    Route::get('/report/download/{id}', 'AssessmentController@downloadPDF');

    // registration
    Route::get('/registration', 'Auth\RegisterController@userRegisterForm');
    Route::post('/register', 'Auth\RegisterController@register');
});

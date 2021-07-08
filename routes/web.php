<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => LaravelLocalization::setLocale()
],function () {

Route::get('/','HomeController@index');
Route::get('/parents','ParentsController@index')->name('parents');
Route::get('/program','ProgramController@index')->name('program');
Route::get('/school','SchoolController@index')->name('school');
Route::get('/list-courses','SchoolController@ListCourses')->name('list-courses');
Route::get('/kathon','SchoolController@kathon')->name('kathon');
Route::get('/contact-us','ContactUsController@index')->name('contact-us');
Route::get('/blog','BlogController@index')->name('blog');
Route::get('/blog/show/{id}','BlogController@show')->name('blog-detail');
Route::get('/press','PressController@index')->name('press');
Route::get('/press/show/{id}','PressController@show')->name('press-detail');
Route::get('/job','JobController@index')->name('job');
Route::get('/job/show/{id}','JobController@show')->name('job-detail');
Route::get('/mini-challenge','MiniChallengeController@index')->name('mini-challenge');
Route::get('/mini-challenge/kathon','MiniChallengeController@kathon')->name('mini-challenge_kathon');
Route::get('/mini-challenge/show','MiniChallengeController@show')->name('course-detail');
Route::get('/social-value-creation','SocialValueCreationController@index')->name('social-value-creation');
Route::get('/social-value-creation/show/{id}','SocialValueCreationController@show')->name('social-value-creation-show');
});

Route::middleware(['auth:student'])->group(function () {
    Route::get('/my-account','MyAccountController@show')->name('my-account');
    Route::post('/my-account','MyAccountController@update')->name('update-my-account');
});

Route::name('web.')->group(function () {
    Route::get('/login/callback','Auth\LoginController@callback')->name('login-callback');
    Route::get('/register/callback','Auth\RegisterController@callback')->name('register-callback');
    Auth::routes();
});

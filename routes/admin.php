<?php
use Illuminate\Support\Facades\Route;
//Route::get('/platform','PlatformController@index');
Route::middleware('auth:admin')->group(function () {
     Route::get('/', 'DashboardController@index');


    //Home content
    Route::resource('/home','HomeController');
    Route::get('/parent/benefit', 'ParentController@benefit')->name('parent.benefit');
    Route::put('/parent/benefit/update/{id}', 'ParentController@update')->name('parent.update');

    //Slide
    Route::get('slides/table-data', 'SlideController@getData')->name('slides.table');
    Route::resource('/slides', 'SlideController');

    //Why us
    Route::get('why-us/table-data', 'WhyUsController@getData')->name('why-us.table');
    Route::resource('/why-us','WhyUsController');

    //Mentor
    Route::get('mentors/table-data', 'MentorController@getData')->name('mentors.table');
    Route::resource('/mentors','MentorController');

    //Why us
    Route::get('testimonials/table-data', 'TestimonialController@getData')->name('testimonials.table');
    Route::resource('/testimonials','TestimonialController');

    //Why us
    Route::get('partners/table-data', 'PartnerController@getData')->name('partners.table');
    Route::resource('/partners','PartnerController');

    //Benefit
    Route::get('benefits/table-data', 'BenefitController@getData')->name('benefits.table');
    Route::resource('/benefits','BenefitController');

    //Gallery
    Route::post('/api/galleries/destroy', 'GalleryController@destroy');
    Route::get('galleries/table-data', 'GalleryController@getData')->name('galleries.table');
    Route::resource('/galleries','GalleryController');


    //Route::get('/api/', 'ProductController');
//    Route::resource('/products', 'ProductController');
    Route::resource('/users', 'UsersController');

    //Blog Page
    Route::resource('/blog-page','BlogPageController');

    //blogs
    Route::post('/api/blogs/remove-image', 'BlogController@removeImage');
    Route::get('blogs/table-data', 'BlogController@getData')->name('blogs.table');
    Route::resource('/blogs','BlogController');

    //Blog Page
    Route::resource('/press-page','PressPageController');
    //Press
    Route::post('/api/jobs/remove-image', 'PressController@removeImage');
    Route::get('presses/table-data', 'PressController@getData')->name('presses.table');
    Route::resource('/presses','PressController');

    //Job Page
    Route::resource('/job-page','JobPageController');
    //Job
    Route::get('jobs/table-data', 'JobController@getData')->name('jobs.table');
    Route::resource('/job-opportunities','JobController');

    //social Page
    Route::resource('/social-page','SocialPageController');
    //Social
    Route::post('/api/social-value/remove-image', 'SocialValueController@removeImage');
    Route::get('social-values/table-data', 'SocialValueController@getData')->name('social-values.table');
    Route::resource('/social-values','SocialValueController');

    //Footer
    Route::resource('/footer','FooterController');
    //General
    Route::resource('/general','GeneralController');
    // Settings
    Route::patch('/settings', 'SettingsController@update')->name('settings.update');
    Route::get('/settings', 'SettingsController@index')->name('settings.index');

    //Mini Challenge
    Route::resource('/mini-challenge-page','MiniChallengePageController');

    //Program
    Route::get('program/table-data', 'ProgramController@getData')->name('program.table');
    Route::resource('/programs','ProgramController');

    //Course
    Route::get('course/table-data', 'CourseController@getData')->name('course.table');
    Route::resource('/courses','CourseController');
});
Auth::routes();

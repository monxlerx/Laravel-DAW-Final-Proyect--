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

Route::get('/', 'StartController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
     return view('dashboards.admin-dashboard');
 });
 
 Route::get('/teacher', function () {
     return view('dashboards.teacher-dashboard');
 });
 Route::get('/student', function () {
     return view('dashboards.student-dashboard');
 });

Route::group([
     'prefix' => 'dashboard',
 ], function () {
     Route::get('/admin', 'DashboardsController@admin')
           ->name('dashboards.admin');
     Route::get('/teacher', 'DashboardsController@teacher')
           ->name('dashboards.teacher');
     Route::get('/student', 'DashboardsController@student')
          ->name('dashboards.student');
 });

// CRUD´s Routes
Route::group([
    'prefix' => 'classes',
], function () {
    Route::get('/', 'ClassesController@index')
         ->name('classes.index');
});

Route::group([
    'prefix' => 'registeredCourse',
], function () {
    Route::get('/', 'RegisteredCourseController@index')
         ->name('registeredCourse.index');
    Route::get('/create','RegisteredCourseController@create')
         ->name('registeredCourse.create');
    Route::get('/show/{registeredCourse}','RegisteredCourseController@show')
         ->name('registeredCourse.show')->where('id', '[0-9]+');
    Route::get('/{registeredCourse}/edit','RegisteredCourseController@edit')
         ->name('registeredCourse.edit')->where('id', '[0-9]+');
    Route::post('/', 'RegisteredCourseController@store')
         ->name('registeredCourse.store');
    Route::put('registeredCourse/{registeredCourse}', 'RegisteredCourseController@update')
         ->name('registeredCourse.update')->where('id', '[0-9]+');
    Route::delete('/registeredCourse/{registeredCourse}','RegisteredCourseController@destroy')
         ->name('registeredCourse.destroy')->where('id', '[0-9]+');
});


Route::group([
     'prefix' => 'courses',
 ], function () {
     Route::get('/', 'CoursesController@index')
          ->name('courses.index');
     Route::get('/create','CoursesController@create')
          ->name('courses.create');
     Route::get('/show/{course}','CoursesController@show')
          ->name('courses.show')->where('id', '[0-9]+');
     Route::get('/{course}/edit','CoursesController@edit')
          ->name('courses.edit')->where('id', '[0-9]+');
     Route::post('/', 'CoursesController@store')
          ->name('courses.store');
     Route::put('course/{course}', 'CoursesController@update')
          ->name('courses.update')->where('id', '[0-9]+');
     Route::delete('/course/{course}','CoursesController@destroy')
          ->name('courses.destroy')->where('id', '[0-9]+');
 });


 Route::group([
    'prefix' => 'teachers',
], function () {
    Route::get('/', 'TeachersController@index')
         ->name('teachers.index');
    Route::get('/create','TeachersController@create')
         ->name('teachers.create');
    Route::get('/show/{teacher}','TeachersController@show')
         ->name('teachers.show')->where('id', '[0-9]+');
    Route::get('/{teacher}/edit','TeachersController@edit')
         ->name('teachers.edit')->where('id', '[0-9]+');
    Route::post('/', 'TeachersController@store')
         ->name('teachers.store');
    Route::put('teacher/{teacher}', 'TeachersController@update')
         ->name('teachers.update')->where('id', '[0-9]+');
    Route::delete('/teacher/{teacher}','TeachersController@destroy')
         ->name('teachers.destroy')->where('id', '[0-9]+');
});


Route::group([
    'prefix' => 'posts',
], function () {
    Route::get('/', 'PostsController@index')
         ->name('posts.index');
    Route::get('/create','PostsController@create')
         ->name('posts.create');
    Route::get('/show/{post}','PostsController@show')
         ->name('posts.show')->where('id', '[0-9]+');
    Route::get('/{post}/edit','PostsController@edit')
         ->name('posts.edit')->where('id', '[0-9]+');
    Route::post('/', 'PostsController@store')
         ->name('posts.store');
    Route::put('post/{post}', 'PostsController@update')
         ->name('posts.update')->where('id', '[0-9]+');
    Route::delete('/post/{post}','PostsController@destroy')
         ->name('posts.destroy')->where('id', '[0-9]+');
});


Route::group([
     'prefix' => 'feedbacks',
 ], function () {
     Route::get('/', 'FeedbacksController@index')
          ->name('feedbacks.index');
     Route::get('/create','FeedbacksController@create')
          ->name('feedbacks.create');
     Route::get('/show/{feedback}','FeedbacksController@show')
          ->name('feedbacks.show')->where('id', '[0-9]+');
     Route::get('/{feedback}/edit','FeedbacksController@edit')
          ->name('feedbacks.edit')->where('id', '[0-9]+');
     Route::post('/', 'FeedbacksController@store')
          ->name('feedbacks.store');
     Route::put('feedback/{feedback}', 'FeedbacksController@update')
          ->name('feedbacks.update')->where('id', '[0-9]+');
     Route::delete('/feedback/{feedback}','FeedbacksController@destroy')
          ->name('feedbacks.destroy')->where('id', '[0-9]+');
 });


 Route::group([
     'prefix' => 'stays__abroads',
 ], function () {
     Route::get('/', 'StaysAbroadsController@index')
          ->name('stays__abroads.index');
     Route::get('/create','StaysAbroadsController@create')
          ->name('stays__abroads.create');
     Route::get('/show/{staysAbroad}','StaysAbroadsController@show')
          ->name('stays__abroads.show')->where('id', '[0-9]+');
     Route::get('/{staysAbroad}/edit','StaysAbroadsController@edit')
          ->name('stays__abroads.edit')->where('id', '[0-9]+');
     Route::post('/', 'StaysAbroadsController@store')
          ->name('stays__abroads.store');
     Route::put('stays__abroad/{staysAbroad}', 'StaysAbroadsController@update')
          ->name('stays__abroads.update')->where('id', '[0-9]+');
     Route::delete('/stays__abroad/{staysAbroad}','StaysAbroadsController@destroy')
          ->name('stays__abroads.destroy')->where('id', '[0-9]+');
 });


 Route::group([
    'prefix' => 'booking__stays__abroads',
], function () {
    Route::get('/', 'BookingStaysAbroadsController@index')
         ->name('booking__stays__abroads.index');
    Route::get('/create','BookingStaysAbroadsController@create')
         ->name('booking__stays__abroads.create');
    Route::get('/show/{bookingStaysAbroad}','BookingStaysAbroadsController@show')
         ->name('booking__stays__abroads.show')->where('id', '[0-9]+');
    Route::get('/{bookingStaysAbroad}/edit','BookingStaysAbroadsController@edit')
         ->name('booking__stays__abroads.edit')->where('id', '[0-9]+');
    Route::post('/', 'BookingStaysAbroadsController@store')
         ->name('booking__stays__abroads.store');
    Route::put('booking__stays__abroad/{bookingStaysAbroad}', 'BookingStaysAbroadsController@update')
         ->name('booking__stays__abroads.update')->where('id', '[0-9]+');
    Route::delete('/booking__stays__abroad/{bookingStaysAbroad}','BookingStaysAbroadsController@destroy')
         ->name('booking__stays__abroads.destroy')->where('id', '[0-9]+');
});


Route::group([
     'prefix' => 'exams',
 ], function () {
     Route::get('/', 'ExamsController@index')
          ->name('exams.index');
     Route::get('/create','ExamsController@create')
          ->name('exams.create');
     Route::get('/show/{exam}','ExamsController@show')
          ->name('exams.show')->where('id', '[0-9]+');
     Route::get('/{exam}/edit','ExamsController@edit')
          ->name('exams.edit')->where('id', '[0-9]+');
     Route::post('/', 'ExamsController@store')
          ->name('exams.store');
     Route::put('exam/{exam}', 'ExamsController@update')
          ->name('exams.update')->where('id', '[0-9]+');
     Route::delete('/exam/{exam}','ExamsController@destroy')
          ->name('exams.destroy')->where('id', '[0-9]+');
 });


 Route::group([
     'prefix' => 'date__exams',
 ], function () {
     Route::get('/', 'DateExamsController@index')
          ->name('date__exams.index');
     Route::get('/create','DateExamsController@create')
          ->name('date__exams.create');
     Route::get('/show/{dateExam}','DateExamsController@show')
          ->name('date__exams.show')->where('id', '[0-9]+');
     Route::get('/{dateExam}/edit','DateExamsController@edit')
          ->name('date__exams.edit')->where('id', '[0-9]+');
     Route::post('/', 'DateExamsController@store')
          ->name('date__exams.store');
     Route::put('date__exam/{dateExam}', 'DateExamsController@update')
          ->name('date__exams.update')->where('id', '[0-9]+');
     Route::delete('/date__exam/{dateExam}','DateExamsController@destroy')
          ->name('date__exams.destroy')->where('id', '[0-9]+');
 });


 Route::group([
    'prefix' => 'exam_reservations',
], function () {
    Route::get('/', 'ExamReservationsController@index')
         ->name('exam_reservations.index');
    Route::get('/create','ExamReservationsController@create')
         ->name('exam_reservations.create');
    Route::get('/show/{examReservation}','ExamReservationsController@show')
         ->name('exam_reservations.show')->where('id', '[0-9]+');
    Route::get('/{examReservation}/edit','ExamReservationsController@edit')
         ->name('exam_reservations.edit')->where('id', '[0-9]+');
    Route::post('/', 'ExamReservationsController@store')
         ->name('exam_reservations.store');
    Route::get('/dates', 'ExamReservationsController@getDates');
    Route::put('exam_reservation/{examReservation}', 'ExamReservationsController@update')
         ->name('exam_reservations.update')->where('id', '[0-9]+');
    Route::delete('/exam_reservation/{examReservation}','ExamReservationsController@destroy')
         ->name('exam_reservations.destroy')->where('id', '[0-9]+');
});


Route::group([
     'prefix' => 'external__emails',
 ], function () {
     Route::get('/', 'ExternalEmailsController@index')
          ->name('external__emails.index');
     Route::get('/create','ExternalEmailsController@create')
          ->name('external__emails.create');
     Route::get('/show/{externalEmail}','ExternalEmailsController@show')
          ->name('external__emails.show')->where('id', '[0-9]+');
     Route::get('/{externalEmail}/edit','ExternalEmailsController@edit')
          ->name('external__emails.edit')->where('id', '[0-9]+');
     Route::post('/', 'ExternalEmailsController@store')
          ->name('external__emails.store');
     Route::put('external__email/{externalEmail}', 'ExternalEmailsController@update')
          ->name('external__emails.update')->where('id', '[0-9]+');
     Route::delete('/external__email/{externalEmail}','ExternalEmailsController@destroy')
          ->name('external__emails.destroy')->where('id', '[0-9]+');
 });

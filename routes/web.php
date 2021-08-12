<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::group([ 'middleware' => ['guest'] ] , function () {

    Route::get('/', function () {
        return view('auth.login');
    });

});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        // Dashbord
        Route::get('/dashboard', 'HomeController@index')->name('dashboard');

        // Grades
        Route::group(['namespace' => 'Grade'], function () {
            Route::resource('/Grades' , 'GradesController');
            Route::resource('/Grade'  , 'GradeController');
        });

        // Classrom
        Route::group(['namespace' => 'Classrooms'], function () {
            Route::resource('Classrooms', 'ClassesroomController');
            Route::resource('Classroom', 'ClassroomController');
        });

});



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
            Route::post('delete_all', 'ClassesroomController@delete_all')->name('delete_all');
            Route::post('Filter_Classes', 'ClassesroomController@Filter_Classes')->name('Filter_Classes');
        });

        // Section
        Route::group(['namespace' => 'Sections'], function () {
            Route::resource('Sections', 'SectionsController');
            Route::resource('Section', 'SectionController');
            Route::get('/classes/{id}', 'SectionsController@getclasses');
        });

        // Parents
        Route::view('add_parent','livewire.show_Form');

        //Teachers
        Route::group(['namespace' => 'Teachers'], function () {
            Route::resource('Teachers', 'TeachersController');
            Route::resource('Teacher', 'TeacherController');
        });

        // Students
        Route::group(['namespace' => 'Students'], function () {
            Route::resource('Students', 'StudentsController');
            Route::get('/Get_classrooms/{id}', 'StudentsController@Get_classrooms');
            Route::get('/Get_Sections/{id}', 'StudentsController@Get_Sections');
            Route::resource('Student', 'StudentController');
            Route::post('Upload_attachment', 'StudentController@Upload_attachment')->name('Upload_attachment');
            Route::get('Download_attachment/{studentsname}/{filename}',
                'StudentController@Download_attachment')->name('Download_attachment');
            Route::post('Delete_attachment', 'StudentController@Delete_attachment')->name('Delete_attachment');
            Route::resource('Promotion', 'PromotionController');
            Route::resource('Graduated', 'GraduatedController');
            Route::resource('Fees', 'FeesController');
            Route::resource('Fees_Invoices', 'FeesInvoicesController');
            Route::resource('receipt_students', 'ReceiptStudentsController');
            Route::resource('ProcessingFee', 'ProcessingFeeController');
            Route::resource('Payment_students', 'PaymentController');
        });

});

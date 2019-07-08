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

Route::get('/', function () {
    return view('users.login');
});
/*Auth::routes(); */

Route::get('/home', 'HomeController@index')->name('home');
//login/out
Route::get('/login', 'Users\LoginController@create'); 
Route::post('/login', 'Users\LoginController@store'); 
Route::get('/logout', 'Users\LoginController@destroy');

//school
Route::get('/school', 'School\SchoolController@create'); 
Route::post('/school', 'School\SchoolController@store'); 
Route::get('/school/list', 'School\SchoolController@list');

//term
Route::get('/term', 'Term\TermController@create'); 
Route::post('/term', 'Term\TermController@store'); 
Route::get('/term/list', 'Term\TermController@list');

//class
Route::get('/class', 'Classes\ClassController@create'); 
Route::post('/class', 'Classes\ClassController@store'); 
Route::get('/classes', 'Classes\ClassController@index');

//marks
Route::get('/marks', 'Marks\MarksController@create'); 
Route::post('/marks', 'Marks\MarksController@store'); 
Route::get('/marks/list', 'Marks\MarksController@list');

//fees
Route::get('/fees', 'Fees\FeesController@create'); 
Route::post('/fees', 'Fees\FeesController@store'); 
Route::get('/fees/list', 'Fees\FeesController@list');

//grade
Route::get('/grade', 'Grades\GradeController@create'); 
Route::post('/grade', 'Grades\GradeController@store'); 
Route::get('/grade/list', 'Grades\GradeController@list');

//subject
Route::get('/subject', 'Subject\SubjectController@create'); 
Route::post('/subject', 'Subject\SubjectController@store'); 
Route::get('/subjects', 'Subject\SubjectController@index');

//subject type
Route::get('/subject-type', 'Subject\SubjectTypeController@create'); 
Route::post('/subject-type', 'Subject\SubjectTypeController@store'); 
Route::get('/subject-type/list', 'Subject\SubjectTypeController@list');

//student
Route::get('/student', 'Students\StudentController@create'); 
Route::post('/student', 'Students\StudentController@store'); 
Route::get('/student/list', 'Students\StudentController@list');

//student added to class
Route::get('/student-class', 'Students\StudentClassController@create'); 
Route::post('/student-class', 'Students\StudentClassController@store'); 
Route::get('/student-class/list', 'Students\StudentClassController@list');

//student and subjects offered
Route::get('/student-subject', 'Students\StudentSubjectController@create'); 
Route::post('/student-subject', 'Students\StudentSubjectController@store'); 
Route::get('/student-subject/list', 'Students\StudentSubjectController@list');

//teacher
Route::get('/teacher', 'Teacher\TeacherController@create'); 
Route::post('/teacher', 'Teacher\TeacherController@store'); 
Route::get('/teacher/list', 'Teacher\TeacherController@list');

//teacher and class to teach
Route::get('/teacher-class', 'Teacher\TeacherClassController@create'); 
Route::post('/teacher-class', 'Teacher\TeacherClassController@store'); 
Route::get('/teacher-class/list', 'Teacher\TeacherClassController@list');

//teachers and subjects they teach
Route::get('/teacher-subject', 'Teacher\TeacherSubjectController@create'); 
Route::post('/teacher-subject', 'Teacher\TeacherSubjectController@store'); 
Route::get('/teacher-subject/list', 'Teacher\TeacherSubjectController@list');

//fees structure
Route::get('/fees-structure', 'FeesStructure\FeesStructureController@create'); 
Route::post('/fees-structure', 'FeesStructure\FeesStructureController@store'); 
Route::get('/fees-structure/list', 'FeesStructure\FeesStructureController@list');

//fees payment
Route::get('/fees-payment', 'FeesPayment\FeesPaymentController@create'); 
Route::post('/fees-payment', 'FeesPayment\FeesPaymentController@store'); 
Route::get('/fees-payment/list', 'FeesPayment\FeesPaymentController@list');

Route::resource('/accounts', 'AccountsController'); 
/*Route::post('/fees-payment', 'FeesPayment\FeesPaymentController@store'); 
Route::get('/fees-payment/list', 'FeesPayment\FeesPaymentController@list');*/

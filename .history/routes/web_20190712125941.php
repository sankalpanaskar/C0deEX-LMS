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
    return view('auth/login');
});
//Route::get('/', 'HomeController@index');
// Route::get('/as', function () {
//     return view('home');
// });
//Route::get('/as', 'HomeController@index');
// Route::get('/about_us', 'HomeController@about_us');
// Route::get('/courses', 'HomeController@courses');
// Route::get('/teachers', 'HomeController@teachers');
// Route::get('/career', 'HomeController@drone_camera');
// Route::get('/contact_us', 'HomeController@contact_us');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin_dashboard', 'HomeController@admin_dashboard')->middleware('auth');
Route::get('/user_list', 'HomeController@user_list')->middleware('auth');
Route::get('/add_user', 'HomeController@add_user')->middleware('auth');
Route::get('/role_list', 'HomeController@role_list')->middleware('auth');
Route::get('/add_role', 'HomeController@add_role')->middleware('auth');
Route::get('/user_permission', 'HomeController@user_permission')->middleware('auth');
Route::get('/student_list', 'HomeController@student_list')->middleware('auth');

Route::get('/online_applicant_list', 'HomeController@online_applicant_list')->middleware('auth');
Route::get('/district_fetch/{id?}', 'HomeController@district_fetch');
Route::get('/course_fetch/{id?}', 'HomeController@course_fetch');
Route::post('/online_student', 'HomeController@online_student');
Route::get('/applicant_fetch/{id?}', 'HomeController@applicant_fetch');
Route::get('/add_student', 'HomeController@add_student');
Route::get('/add_course', 'HomeController@add_course');
Route::get('/course_list', 'HomeController@course_list');
Route::post('/course_store', 'MainController@course_store');
Route::post('/course_type_store', 'MainController@course_type_store');
Route::get('/course_list_delete/{id}', 'MainController@course_list_delete');
// Route::post('/logout', 'HomeController@logout');

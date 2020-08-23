<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

Route::get('/', 'PagesController@index')->name('home');
Route::get('about', 'PagesController@about')->name('about');
Route::get('courses', 'PagesController@courses')->name('courses');
Route::get('courses_kids', 'PagesController@courses_kids')->name('courses_kids');
Route::get('courses_teens', 'PagesController@courses_teens')->name('courses_teens');
Route::get('courses_adults', 'PagesController@courses_adults')->name('courses_adults');
Route::get('courses_business', 'PagesController@courses_business')->name('courses_business');
Route::get('courses_exams', 'PagesController@courses_exams')->name('courses_exams');
Route::get('gallery', 'PagesController@gallery')->name('gallery');

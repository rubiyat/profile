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
    return view('welcome');
});

Route::group(['middleware'=>'auth'], function(){
 //   Route::get('admin', function(){
 //   return view ('admin.dashboard');
	// });
   	//Route::resource('admin','AdminController');
   	Route::get('admin','AdminController@index')->name('dashboard');
	Route::resource('admin/abouts','AboutController');
	Route::resource('admin/skills','SkillController');
	Route::resource('admin/educations','EducationController');
	Route::resource('admin/experiences','ExperienceController');
	Route::resource('admin/portfolios','PortfolioController');
	Route::resource('admin/testimonials','TestimonialController');
	Route::resource('admin/contacts','ContactController');
});
Route::get('/', 'FrontController@getComplateResume');
Route::post('/', 'FrontController@saveContact')->name('contacts');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('admin','AdminController@index')->name('dashboard');



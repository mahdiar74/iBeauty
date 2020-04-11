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

Route::resource('/', 'HomeController');
Route::prefix("admin")->namespace("Admin")->middleware('auth')->middleware("checkRole")->group(function(){
    Route::resource('/', 'AdminController');
    Route::resource('/doctor', 'DoctorController');
    Route::post("/doctor/uploadImage","DoctorController@uploadImage");
    Route::post("/doctor/uploadVideo","DoctorController@uploadVideo");
    Route::post("/doctor/createGallery","DoctorController@createGallery");
});
Route::post("/admin/upload","FileManagement@upload")->middleware('auth')->middleware("checkRole");
Route::resource('doctor', 'Doctor\DoctorController');


Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');


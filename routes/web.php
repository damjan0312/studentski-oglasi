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


Route::get('/', 'PublicController@index')->name('index');
Route::get('/prijava', 'PublicController@login')->name('login');
Route::get('/registracija', 'PublicController@registration')->name('registration');
Route::get('/verifikacija', 'PublicController@verify')->name('verify');

Auth::routes(['verify' => true]);

//Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/profil','HomeController@profile')->name('profile');

Route::get('/dodajOglas', 'HomeController@ad')->name('ad');

//Route::get('/index', 'HomeController@index')->name('index');
Route::get('/index', 'PublicController@index')->name('index');

Route::resource('updateProfil','HomeController');

Route::get('/oglas', 'PublicController@seeAdPage')->name('seeAdPage');

Route::get('/studentskiOglas', 'PublicController@studentAd')->name('studentAd');

Route::get('image-upload', 'adUploadController@imageUpload')->name('image.upload');

Route::post('image-upload', 'adUploadController@imageUploadPost')->name('image.upload.post');

Route::get('oglas/{id}', 'PublicController@adLink');



Route::post('search', 'PublicController@search')->name('search');

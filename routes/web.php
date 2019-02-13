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
    return redirect('home');
});

Route::get('travel/{id}', 'TravelController@show');
Route::get('about', 'Page@about');
Route::get('blog', 'Page@blog');
Route::get('contact', 'Page@contact');
Route::get('hotels', 'Page@hotels');
Route::get('services', 'Page@services');
Route::get('tours', 'TravelController@index');
Route::post('tours', 'TravelController@search');

Route::prefix('admin')->middleware('admin')->group(function() {
    Route::view('/', 'admin.index')->name('admin.index');
    Route::resource('travels', 'AdminTravelController', ['as' => 'admin']);
});



Auth::routes();

Route::get('/home', 'Page@home')->name('home');
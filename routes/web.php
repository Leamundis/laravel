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

Route::get('voyages/{id}', function ($id) {
    return ('On part en vacances à ' . $id);
});

Route::get('admin/voyages/{id}', function ($id) {
    return ('On part en vacances à ' . $id . ' avec l\'admin');
});

Route::get('messages/{id}', function ($id) {
    return ('On va à la convention numéro ' . $id);
})->where('id', '[0-9]+');

Route::get('about', 'Page@about');
Route::get('home', 'Page@home');
Route::get('blog', 'Page@blog');
Route::get('contact', 'Page@contact');
Route::get('hotels', 'Page@hotels');
Route::get('services', 'Page@services');
Route::get('tours', 'Page@tours');

Route::get('travelList', 'Travel@index');





//Route::view('hotel-room', 'site/hotel-room');
//Route::view('message', 'welcome');
//Route::view('admin/voyages', 'welcome');
//Route::view('voyages', 'welcome');
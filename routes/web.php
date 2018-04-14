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
    return view('fr.index');
});
Route::get('/en', function () {
    return view('en.index');
});
Route::get('/es', function () {
    return view('es.index');
});

Route::get('/ch', function () {
    return view('ch.index');
});
Route::post('/contact', 'ContactFormController@send')->name('contact');

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


Route::get('TestDesigner', function () {
    return view('TestDesigner');
});

Route::get('Documentation', function () {
    return view('Documentation');
});

Route::get('FAQ', function () {
    return view('FAQ');
});

Route::get('Contribute', function () {
    return view('Contribute');
});

Route::get('Contact', function () {
    return view('Contact');
});
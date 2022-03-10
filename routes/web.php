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
    return view('frontend.index');
});


<<<<<<< HEAD
Route::get('/master', function () {
    return view('layout.admin');
});

=======
Route::get('/journal', function () {
    return view('frontend.journal');
});

Route::get('/detail', function () {
    return view('frontend.detail');
});


>>>>>>> be34f834e63f6929882426a3d4ad6cf974597db4

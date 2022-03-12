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

Route::get('/', 'IndexController@index');

Route::get('/master', function () {
    return view('layout.admin');
});

Route::get('/journal', 'IndexController@ViewJournal');

Route::get('/detail', function () {
    return view('frontend.detail');
});

Route::get('/admin/jurnal', function() {
    return view('admin.jurnal.index');
});

Route::get('/admin/jurnal-add', function() {
    return view('admin.jurnal.create');
});

Route::get('admin/jurnal-kategori', function() {
    return view('admin.jurnal.kategori');
});

Auth::routes();


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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/journal', 'IndexController@ViewJournal');

Route::get('admin/jurnal-kategori', function() {
    return view('admin.jurnal.kategori');
});


Route::get('/detail', function () {
    return view('frontend.detail');
});

// //CRUD Kategori
Route::get('/admin/jurnal/kategori', 'KategoriController@create'); // Route -> Kategori
Route::post('/admin/jurnal/kategori', 'KategoriController@store'); // Create -> Route Store -> Kategori
Route::get('/admin/jurnal/kategori', 'KategoriController@index'); // Read -> Route Index -> Kategori
Route::get('/admin/jurnal/kategori/{kategori_id}/edit', 'KategoriController@edit'); // Update -> Route Edit -> Kategori
Route::put('/admin/jurnal/kategori/{kategori_id}', 'KategoriController@update'); // Update -> Route
Route::delete('/admin/jurnal/kategori/{kategori_id}', 'KategoriController@destroy'); // Delete -> Route

//CRUD Jurnal
Route::resource('jurnal', 'JurnalController');


// Auth
Auth::routes();

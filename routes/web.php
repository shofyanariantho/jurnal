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


Route::get('/dashboard', function () {
    return view('admin.dashboard');
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

// Profile
Route::resource('profil','ProfileController')->only([
    'index', 'update'
]);

// Auth
Auth::routes();

//Review
Route::resource('review', 'ReviewController')->only([
    'index', 'store'
]);
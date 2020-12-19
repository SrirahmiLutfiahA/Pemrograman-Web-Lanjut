<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
/*--------------------------------------------------------------------------------- */
//Route menu admin
Route::get('/menuadmin', 'MenuController@menuadmin')->name('menuadmin');
// add menu
Route::get('/menuadmin/create', 'MenuController@create')->name('menuadmin.create');
Route::PUT('/menuadmin/store', 'MenuController@store')->name('menuadmin.store');
//edit menu
Route::get('/menuadmin/edit/{id}', 'MenuController@edit')->name('menuadmin.edit');
Route::PUT('/menuadmin/update{id}', 'MenuController@update')->name('menuadmin.update');
//delete menu
Route::get('/menuadmin/delete/{id}', 'MenuController@delete')->name('menuadmin.delete');
//orderan
Route::get('/orderan/tambah/{id}', 'OrderController@tambah_cart')->name('orderan');
/*--------------------------------------------------------------------------------- */
// Route menu user
Route::get('/menu', 'MenuController@menu')->name('menu');
//tambah menu
Route::get('/cart/tambah/{id}', 'OrderController@tambah_cart')->name('tambahcart');
Route::get('/cart', 'OrderController@cart')->name('cart');
//hapus order
Route::get('/cart/hapus/{id}', 'OrderController@hapus_cart')->name('carthapus');
//pesan menu
Route::get('/pesan/tambah', 'OrderController@klikpesan')->name('klikpesan');

//contact
Route::get('/contact', 'ContactController@contact');

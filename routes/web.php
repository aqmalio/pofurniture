<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});




Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


// Hanya Admin
Route::middleware('auth')->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');

        //route crate produk Khusus admin
    Route::get('/createproduk', 'produkcontroller@index');
    Route::post('/createproduk', 'produkcontroller@store')->name('savegambar');

        //route edit dan update data Khusus admin
    Route::get('/editpage', 'produkcontroller@displayadmin')->name('produk');    
    Route::get('/editproduk/{id}', 'produkcontroller@edit');
    Route::put('/updateproduk/{id}', 'produkcontroller@update');

      //route hapus data Khusus admin
    Route::get('/deleteproduk/{id}', 'produkcontroller@delete')->name('hapusproduk');
});



// user
Route::get('/produk', 'produkcontroller@display'); //route tamp

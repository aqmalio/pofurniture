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

    //PRODUK
            //route crate produk Khusus admin
    Route::get('/createproduk', 'produkcontroller@index');
    Route::post('/createproduk', 'produkcontroller@store')->name('savegambar');
            //route edit dan update data Khusus admin
    Route::get('/editpageproduk', 'produkcontroller@displayadmin')->name('produk');    
    Route::get('/editproduk/{id}', 'produkcontroller@edit');
    Route::put('/updateproduk/{id}', 'produkcontroller@update');
            //route hapus data Khusus admin
    Route::get('/deleteproduk/{id}', 'produkcontroller@delete')->name('hapusproduk');

    //BLOG
            //route crate blog Khusus admin
    Route::get('/createblog', 'blogcontroller@index');
    Route::post('/createblog', 'blogcontroller@store')->name('saveblog');
            //route edit dan update data Khusus admin
    Route::get('/editpageblog', 'blogcontroller@displayadmin')->name('produk');    
    Route::get('/editblog/{id}', 'blogcontroller@edit');
    Route::put('/updateblog/{id}', 'blogcontroller@update');
            //route hapus data Khusus admin 
    Route::get('/deleteblog/{id}', 'blogcontroller@delete')->name('hapusblog');
});

// user
Route::get('/produk', 'produkcontroller@display');
Route::get('/produk/{slug}', 'produkcontroller@tampilanslug');

Route::get('/blog', 'blogcontroller@display');
Route::get('/blog/{slug}', 'blogcontroller@tampilanslug');



// Route::post('/blog/pencarian', 'blogcontroller@cari')->name('biodata.pencarian');








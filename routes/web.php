<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('main.pages.home');
});

Auth::routes();
Route::get('/admin', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/admin/catalog', 'produkcontroller@index');
    Route::get('/admin/catalog/create', 'produkcontroller@create');
    Route::post('/admin/catalog/create', 'produkcontroller@store')->name('catalog.store');
    Route::get('/admin/catalog/edit/{id}', 'produkcontroller@edit');
    Route::put('/admin/catalog/edit/{id}', 'produkcontroller@update');
    Route::delete('/admin/catalog/delete/{id}', 'produkcontroller@delete')->name('catalog.delete');

    Route::get('/admin/blog', 'blogcontroller@index');
    Route::get('/admin/blog/create', 'blogcontroller@create');
    Route::post('/admin/blog/create', 'blogcontroller@store')->name('blog.store');
    Route::get('/admin/blog/edit/{id}', 'blogcontroller@edit');
    Route::put('/admin/blog/edit/{id}', 'blogcontroller@update');
    Route::delete('/admin/blog/delete/{id}', 'blogcontroller@delete')->name('blog.delete');
});

Route::get('/blog', 'blogcontroller@display');
Route::get('/blog/{slug}', 'blogcontroller@show');

Route::get('/catalog', 'produkcontroller@display');
Route::get('/catalog/{slug}', 'produkcontroller@show');
Route::resource('contacts', 'ContactController');

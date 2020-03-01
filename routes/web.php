<?php

//Route Home
Route::get('/', 'ShopController@index');

//trang quan tri
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function ()
{

    Route::get('/', 'AdminController@index')->name('dashboard');

//Trang category
    Route::resource('category', 'CategoryController')->names([
        'create' => 'category.create',
        'store' => 'category.store',
        'show' => 'category.show',
        'edit' => 'category.edit'

    ]);

//Trang product
    Route::resource('product', 'ProductController');

//Trang Banner
    Route::resource('banner', 'BannerController');

});



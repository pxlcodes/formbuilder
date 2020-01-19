<?php

Route::group(['namespace' =>'Pxlcodes\Formbuilder\Http\Controllers'], function () {
    Route::get('create', 'FormTestController@index')->name('create');
    Route::post('admin/create', 'FormTestController@store')->name('create');
});
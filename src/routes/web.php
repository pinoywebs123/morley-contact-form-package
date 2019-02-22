<?php

Route::group(['namespace'=> 'morley\contact\Http\Controllers'], function(){

    Route::get('/contact','ContactController@contact');
    Route::post('/contact','ContactController@sendContact')->name('send');
});
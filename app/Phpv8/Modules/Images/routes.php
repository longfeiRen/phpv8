<?php

Route::group(
    [
        'namespace' => 'Phpv8\Modules\Images\Controllers',
        'prefix'	=> 'admin'
    ],
    function () {
        Route::any('images/table',['as'=>'images.table','uses'=>'AdminController@anyTablelist']);
        Route::resource('images', 'AdminController');
    }
);
Route::group(array('prefix'=>'api/v1'), function() {
    Route::resource(
        'images',
        'Phpv8\Modules\Images\Controllers\ApiController'
    );
});
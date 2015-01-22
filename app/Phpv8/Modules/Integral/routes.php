<?php

Route::group(
    [
        'namespace' => 'Phpv8\Modules\Integral\Controllers',
        'prefix'	=> 'admin'
    ],
    function () {
        Route::any('integral/table',['as'=>'integral.table','uses'=>'AdminController@anyTablelist']);
        Route::resource('integral', 'AdminController');
    }
);
Route::group(array('prefix'=>'api/v1'), function() {
    Route::resource(
        'integral',
        'Phpv8\Modules\Integral\Controllers\ApiController'
    );
});
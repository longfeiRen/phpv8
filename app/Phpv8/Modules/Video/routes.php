<?php

Route::group(
    [
        'namespace' => 'Phpv8\Modules\Video\Controllers',
        'prefix'	=> 'admin'
    ],
    function () {
        Route::any('video/table',['as'=>'module.table','uses'=>'AdminController@anyTablelist']);
        Route::resource('video', 'AdminController');
    }
);
Route::group(array('prefix'=>'api/v1'), function() {
    Route::resource(
        'video',
        'Phpv8\Modules\Video\Controllers\ApiController'
    );
});
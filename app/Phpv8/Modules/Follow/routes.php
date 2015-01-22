<?php

Route::group(
    [
        'namespace' => 'Phpv8\Modules\Follow\Controllers',
        'prefix'	=> 'admin'
    ],
    function () {

        Route::resource('follow', 'AdminController');
    }
);
Route::group(array('prefix'=>'api/v1'), function() {
    Route::resource(
        'follow',
        'Phpv8\Modules\Follow\Controllers\ApiController'
    );
});
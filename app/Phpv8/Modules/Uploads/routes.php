<?php

Route::group(
    [
        'namespace' => 'Phpv8\Modules\Uploads\Controllers',
        'prefix'	=> 'admin'
    ],
    function () {

        Route::resource('uploads', 'AdminController');
    }
);
Route::group(array('prefix'=>'api/v1'), function() {
    Route::resource(
        'uploads',
        'Phpv8\Modules\Uploads\Controllers\ApiController'
    );
});
<?php

Route::group(
    [
        'namespace' => 'Phpv8\Modules\Setting\Controllers',
        'prefix'	=> 'admin'
    ],
    function () {

        Route::resource('setting', 'AdminController');
    }
);
Route::group(array('prefix'=>'api/v1'), function() {
    Route::resource(
        'setting',
        'Phpv8\Modules\Setting\Controllers\ApiController'
    );
});
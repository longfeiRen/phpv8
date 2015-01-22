<?php

Route::group(
    [
        'namespace' => 'Phpv8\Modules\{Module}\Controllers',
        'prefix'	=> 'admin'
    ],
    function () {

        Route::resource('{name}', 'AdminController');
    }
);
Route::group(array('prefix'=>'api/v1'), function() {
    Route::resource(
        '{name}',
        'Phpv8\Modules\{Module}\Controllers\ApiController'
    );
});
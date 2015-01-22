<?php

Route::group(
    [
        'namespace' => 'Phpv8\Modules\Classify\Controllers',
        'prefix'	=> 'admin'
    ],
    function () {
        Route::any('classify/table',['as'=>'classify.table','uses'=>'AdminController@anyTablelist']);
        Route::resource('classify', 'AdminController');
    }
);
Route::group(array('prefix'=>'api/v1'), function() {
    Route::resource(
        'classify',
        'Phpv8\Modules\Classify\Controllers\ApiController'
    );
});
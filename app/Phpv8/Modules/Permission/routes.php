<?php

Route::group(
    [
        'namespace' => 'Phpv8\Modules\Permission\Controllers',
        'prefix'	=> 'admin'
    ],
    function () {
        Route::any('permission/table',['as'=>'permission.table','uses'=>'AdminController@anyTablelist']);
        Route::resource('permission', 'AdminController');
    }
);
Route::group(array('prefix'=>'api/v1'), function() {
    Route::resource(
        'permission',
        'Phpv8\Modules\Permission\Controllers\ApiController'
    );
});
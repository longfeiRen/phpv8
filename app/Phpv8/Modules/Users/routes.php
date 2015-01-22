<?php

Route::group(
    [
        'namespace' => 'Phpv8\Modules\Users\Controllers',
        'prefix'	=> 'admin'
    ],
    function () {
        Route::any('users/table',['as'=>'users.table','uses'=>'AdminController@anyTablelist']);
        Route::resource('users', 'AdminController');
    }
);
Route::group(array('prefix'=>'api/v1'), function() {
    Route::resource(
        'users',
        'Phpv8\Modules\Users\Controllers\ApiController'
    );
});
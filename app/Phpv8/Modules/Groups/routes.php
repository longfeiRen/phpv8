<?php

Route::group(
    [
        'namespace' => 'Phpv8\Modules\Groups\Controllers',
        'prefix'	=> 'admin'
    ],
    function () {
        Route::any('groups/table',['as'=>'groups.table','uses'=>'AdminController@anyTablelist']);
        Route::resource('groups', 'AdminController');
    }
);
Route::group(array('prefix'=>'api/v1'), function() {
    Route::resource(
        'groups',
        'Phpv8\Modules\Groups\Controllers\ApiController'
    );
});
<?php

Route::group(
    [
        'namespace' => 'Phpv8\Modules\Reply\Controllers',
        'prefix'	=> 'admin'
    ],
    function () {
        Route::any('reply/table',['as'=>'reply.table','uses'=>'AdminController@anyTablelist']);
        Route::resource('reply', 'AdminController');
    }
);
Route::group(array('prefix'=>'api/v1'), function() {
    Route::resource(
        'reply',
        'Phpv8\Modules\Reply\Controllers\ApiController'
    );
});
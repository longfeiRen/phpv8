<?php

Route::group(
    [
        'namespace' => 'Phpv8\Modules\Letter\Controllers',
        'prefix'	=> 'admin'
    ],
    function () {
        Route::any('letter/table',['as'=>'letter.table','uses'=>'AdminController@anyTablelist']);
        Route::resource('letter', 'AdminController');
    }
);
Route::group(array('prefix'=>'api/v1'), function() {
    Route::resource(
        'letter',
        'Phpv8\Modules\Letter\Controllers\ApiController'
    );
});
<?php

Route::group(
    [
        'namespace' => 'Phpv8\Modules\Shop\Controllers',
        'prefix'	=> 'admin'
    ],
    function () {
        Route::any('shop/table',['as'=>'shop.table','uses'=>'AdminController@anyTablelist']);
        Route::resource('shop', 'AdminController');
    }
);
Route::group(array('prefix'=>'api/v1'), function() {
    Route::resource(
        'shop',
        'Phpv8\Modules\Shop\Controllers\ApiController'
    );
});
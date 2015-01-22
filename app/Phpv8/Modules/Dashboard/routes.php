<?php

Route::group(
    [
        'namespace' => 'Phpv8\Modules\Dashboard\Controllers',
        'prefix'	=> 'admin'
    ],
    function () {
        Route::get('/', array( 'as' => 'dashboard', 'uses' => 'AdminController@index'));
    }
);
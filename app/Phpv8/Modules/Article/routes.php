<?php

Route::group(
    [
        'namespace' => 'Phpv8\Modules\Article\Controllers',
        'prefix'	=> 'admin'
    ],
    function () {
        Route::any('article/table',['as'=>'article.table','uses'=>'AdminController@anyTablelist']);
        Route::resource('article', 'AdminController');
    }
);
Route::group(array('prefix'=>'api/v1'), function() {
    Route::resource(
        'article',
        'Phpv8\Modules\Article\Controllers\ApiController'
    );
});
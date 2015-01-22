<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::filter('public.checkLocale',   'Phpv8\Filters\PublicFilter@checkLocale');

//Route::when('admin','public.checkLocale');
//Route::when('admin/*','public.checkLocale');
Route::when('api','public.checkLocale');
Route::when('api/*','public.checkLocale');


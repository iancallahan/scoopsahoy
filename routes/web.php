<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('app');
});

Route::post(
    'order',
    ['as' => 'order.submit', 'uses' => 'App\Controllers\OrderController@store']
);

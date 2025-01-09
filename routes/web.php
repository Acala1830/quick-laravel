<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HelloController;
// 「/」に対するルート
Route::get('/', function () {
    return view('welcome');
});
// 「/hello」に対するルート
Route::get('/hello', [HelloController::class, 'index']);
Route::get('/hello/view', [HelloController::class, 'view']);
Route::get('/hello/list', [HelloController::class, 'list']);
// Route::get('/hello/view', 'HelloController@view');
// Route::get('/hello', 'HelloController@index');
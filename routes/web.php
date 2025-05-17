<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HelloController;
use \App\Http\Controllers\ViewController;
use \App\Http\Controllers\RouteController;
// 「/」に対するルート
Route::get('/', function () {
    return view('welcome');
});
// 「/hello」に対するルート
// Route::get('/hello', [HelloController::class, 'index']);
Route::get('/hello/view', [HelloController::class, 'view']);
Route::get('/hello/list', [HelloController::class, 'list']);
// Route::controller([HelloController::class]) -> group(function () {
//     Route:get('hello/view', 'view');
// });
Route::get('/view/escape', [ViewController::class, 'escape']);
Route::get('/view/if', [ViewController::class, 'if']);
Route::get('/view/isset', [ViewController::class, 'isset']);
Route::get('/view/switch', [ViewController::class, 'switch']);
Route::get('/view/while', [ViewController::class, 'while']);
Route::get('/view/for', [ViewController::class, 'for']);
Route::get('/view/foreach_assoc', [ViewController::class, 'foreach_assoc']);
Route::get('/view/foreach_loop', [ViewController::class, 'foreach_loop']);
Route::get('/view/style_class', [ViewController::class, 'style_class']);
Route::get('/view/checked', [ViewController::class, 'checked']);
Route::get('/view/master', [ViewController::class, 'master']);
Route::get('/view/comp', [ViewController::class, 'comp']);
Route::get('/view/list', [ViewController::class, 'list']);
Route::get('/route/param/{id?}', [RouteController::class, 'param']) -> whereNumber('id');
Route::get('/route/search/{keywd?}', [RouteController::class, 'search']) -> where('keywd', '.*');
Route::get('/route/enum_param/{category}', [RouteController::class, 'enum_param']);
Route::redirect('/hoge','/', 301);
Route::fallback(function() {
    return view('route.error');
});
// 4.5.2~
// Route::get('/view/forelse', [ViewController::class, 'forelse']);
// Route::get('/hello/view', 'HelloController@view');
// Route::get('/hello/list', 'HelloController@list');
// Route::get('/view/escape', 'ViewController@escape');
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/requests/custom', function (\App\Http\Requests\ShouldBeInFrench $request) {
    dump("INTL locale: " . \Locale::getDefault());
    return "I'm the custom request. <a href='/requests/base'>Go to base request</a>";
});

Route::get('/requests/base', function (\Illuminate\Http\Request $request) {
    dump("INTL locale: " . \Locale::getDefault());
    return "I'm the original request. <a href='/requests/custom'>Go to custom request</a>";
});

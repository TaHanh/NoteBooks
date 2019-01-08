<?php

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

Route::get('/', 'LoginController@getLogin');
Route::post('/', 'LoginController@postLogin');
Route::post('/notebook/feedback', function () {
    alert('Gửi thông tin thành công!');
    return view('index');
});
Route::get('/notebook/{notebook}', function () {
    return view('index');
})->where('notebook', '[\/\w\.-]*');

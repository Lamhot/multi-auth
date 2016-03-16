<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/login', function() {

    $auth = auth()->guard('marketing');

    $credentials = [
        'name' =>  'contoh',
        'password' =>  'contoh',
    ];

    if ($auth->attempt($credentials)) {
        return 'sukses login';
    }

    return 'Gagal login.';

});
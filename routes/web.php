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

Route::get('/auth', function () {
    return view('auth');
});

Route::post('/auth', function (\Illuminate\Http\Request $request) {
    $email = $request->get("emailID");
    $password = $request->get("passwordID");
    $password2 = $request->get("password2ID");

    // it actually returns "419 | PAGE EXPIRED"
    return view('auth', [
        "emailID" => $email,
        "passwordID" => $password,
        "password2ID" => $password2,
    ]);
});

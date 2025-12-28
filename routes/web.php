<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', UserController::class);
 
Route::get('mobile', function (Request $request) {
    $token = $request->session()->token(); 
    $token = csrf_token();
    return response()->json($token);
});

Route::get('/mobile/data', function () {
    return response()->json([
        'success' => true,
        'data' => ['items' => [1, 2, 3]]
    ]);
});

<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\AllController;
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

Route::view('/login', 'login');
Route::view('/register', 'register');

Route::post('/register',[AllController::class,'register']);
Route::post('/login',[AllController::class,'login']);

Route::get('/logout', function () {
    if(session()->has('UserData')){
        session()->pull('UserData');
        return redirect('/');
    }
});
// Route::get('/login', function () {
//     if(session()->has('UserData')){
//         return redirect('/');
//     }else{
//         return redirect('/');
//     }
// });
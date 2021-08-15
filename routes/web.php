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

Route::get('/login', [AllController::class,'loginview']);
Route::get('/register', [AllController::class,'registerForm']);

Route::post('/register',[AllController::class,'register']);
Route::post('/login',[AllController::class,'login']);

Route::get('/logout', function () {
    if(session()->has('UserData')){
        session()->flush('UserData');
        return redirect('/login');
    }
});

// Route::get('/login', function () {
//     if(session()->has('UserData')){
//         return redirect('/');
//     }else{
//         return redirect('/login');
//     }
// });
// Route::get('/register', function () {
//     if(session()->has('UserData')){
//         return redirect('/');
//     }else{
//         return redirect('/login');
//     }
// });
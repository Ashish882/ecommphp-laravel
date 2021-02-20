<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\UserController;

=======
>>>>>>> 4976452c0048139c14a5de981584aff8e0a0c1a5

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

<<<<<<< HEAD
Route::get('/login', function () {
    return view('login');
});

Route::post("login",[UserController::class,'login']);

=======
Route::get('/', function () {
    return view('login');
});
>>>>>>> 4976452c0048139c14a5de981584aff8e0a0c1a5

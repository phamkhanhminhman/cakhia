<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TestController;
use App\Http\Controllers\User\testController;
use App\Http\Controllers\User\HomeController;

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

//USER
Route::get('/', [HomeController::class, 'index']);






// Route::get('/test', [TestController::class, 'test']);

Route::get('/test', [testController::class, 'index']);

Route::get('/clear', function() {
        $run = Artisan::call('config:cache');
        return 'FINISHED';  
});
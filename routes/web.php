<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TestController;
use App\Http\Controllers\User\testController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\GalleryController;
use App\Http\Controllers\User\ContactController;


use App\Http\Controllers\Admin\HomeController as HomeAdmin;
use App\Http\Controllers\Admin\PeopleController;
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

Route::get('/people', [GalleryController::class, 'people']);

Route::get('/contact', [ContactController::class, 'index']);




//ADMIN

Route::get('/admin', 		[HomeAdmin::class, 'index']);
Route::get('/admin/people', [PeopleController::class, 'index']);







// Route::get('/test', [TestController::class, 'test']);

Route::get('/test', [testController::class, 'index']);

Route::get('/clear', function() {
        $run = Artisan::call('config:cache');
        return 'FINISHED';  
});
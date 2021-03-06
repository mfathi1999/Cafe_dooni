<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CafeController;

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

//homepage
Route::get('/', function () {
    return view('pages.homePage');
})->name('homePage');


//about us page
Route::get('/about',function(){
    return view('pages.about');
})->name('about');


//cafe Resorce route
Route::resource('cafes',CafeController::class);
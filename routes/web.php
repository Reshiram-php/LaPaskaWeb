<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[WebController::class, 'homeindex'] );

Route::get('/adopt',[WebController::class,'adoptindex' ]);
Route::get('/adoptsingle/{id}',[WebController::class,'adoptsingleindex' ] );

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/gallery' ,[WebController::class,'galleryindex' ] );
Route::get('/team',[WebController::class,'teamindex' ] );
Route::get('/product',[WebController::class,'productindex' ] );
Route::post('/messagepost',[WebController::class,'messageContent' ] )->name('message.content');


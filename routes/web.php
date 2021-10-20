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

Route::get('/modelos3d', function () {
    return view('dashboard');
})->name('crud.modelos3d');

Route::get('/codigosqr', function () {
    return view('dashboard');
})->name('crud.codigosqr');

Route::middleware(['auth:sanctum', 'verified'])->group(function (){

    Route::get('/dashboard', function (){
       return view('dashboard');
    })->name('dashboard');

    Route::get('/admin', function (){
        return view('admin.index');
    })->name('admin.index');

});




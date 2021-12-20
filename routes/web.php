<?php

use App\Http\Controllers\InstitucionController;
use App\Http\Controllers\QrcodeController;
use Illuminate\Support\Facades\Request;
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
    return redirect()->route('login');
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/user/perfil', function () {
        return view('user/perfil');
    })->name('user.perfil');

    Route::get('/theme/toDark', function () {
        cache()->set('darkTheme', !cache()->get('darkTheme'));
    })->name('theme.toDark');
});

Route::group(['middleware' => ['role:super-admin|admin']], function () {

    /* ---------- MODEL 3D ---------- */
    Route::get('/model', function () {
        return view('user/model');
    })->name('model');

    /* ---------- QR CODE ---------- */
    Route::get('/qrcode', [QrcodeController::class, 'all'])
        ->name('qrcode');

    Route::get('/qrcode/nuevo', [QrcodeController::class, 'create'])
        ->name('qrcode.nuevo');

    Route::post('/qrcode/nuevo', [QrcodeController::class, 'set'])
        ->name('qrcode.nuevo_post');

    Route::get('/qrcode/delete/{qr}', [QrcodeController::class, 'delete']);

    Route::get('/qrcode/descargar/{qr}', [QrcodeController::class, 'descargar']);

    Route::get('/qrcode/imprimir/{qr}', [QrcodeController::class, 'imprimir']);

    /* ---------- INSTITUCIONES ---------- */
    Route::get('/institucion', [InstitucionController::class, 'all'])
        ->name('institucion');

    Route::get('/institucion/nuevo', [InstitucionController::class, 'create'])
        ->name('institucion.nuevo');

    Route::post('/institucion/nuevo', [InstitucionController::class, 'set'])
        ->name('institucion.nuevo_post');

    Route::get('/institucion/delete/{institucion}', [InstitucionController::class, 'delete']);
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

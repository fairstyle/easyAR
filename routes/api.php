<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\QrcodeapiController;

Route::apiResource('v1/qrcode', QrcodeapiController::class)->only('show')->middleware('auth:sanctum');


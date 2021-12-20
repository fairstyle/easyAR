<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Qrcode;

class QrcodeapiController extends Controller{

    public function show(string $qrcode_uuid){
        $qr = Qrcode::where('uuid', $qrcode_uuid)->firstOrFail();
        return response()->json($qr);
    }

}

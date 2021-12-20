<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class ApiController extends Controller
{
    public function crear(Request $request){
        $token = "";
        if(Auth::user()->tokens()->first() == null) {
            $token = Auth::user()->createToken('API')->plainTextToken;
            Cache::put('easyAR_token_API_plaintext', $token, 900);
        }
        return redirect()->route('user.perfil');
    }

    public function eliminar(){
        if(Auth::user()->tokens()->first() != null){
            Auth::user()->tokens()->first()->delete();
        }
        return redirect()->route('user.perfil');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Institucion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class InstitucionController extends Controller
{

    public function all(){
        $instituciones = Institucion::all();
        return view('user.institucion', compact('instituciones'));
    }

    public function create(){
        return view('user.institucion_nuevo');
    }

    public function set(Request $request){

        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:20'],
            'imagenins' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ])->validateWithBag('createQrCode');

        if ($request->file('imagenins') != null) {
            Storage::disk('public')->put('logos-institucion/', $request->file('imagenins'));

            Institucion::create([
                'name' => $request->get('name'),
                'img_path' => $request->file('imagenins')->hashName(),
            ]);

            session(['created' => true]);
        }

        return redirect()->route('institucion');
    }

    public function delete(Institucion $institucion){
        if($institucion){
            $institucion->delete();
        }
        return redirect()->route('institucion');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function update(Request $request)
    {
        $user = $request->user();

        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:50'],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');

        if ($request->file('imagenPerfil') != null) {

            Storage::disk('public')->put('fotos-perfil/', $request->file('imagenPerfil'));

            $user->updateProfilePhotoName($request->file('imagenPerfil')->hashName());
        }

        if($user->name != $request->get('name')){
            $user->name = $request->get('name');
            $user->save();
        }

        session(['profile_updated' => true]);

        return redirect()->route('user.perfil');

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode as Qrc;

use App\Models\Institucion;
use App\Models\Qrcode;

class QrcodeController extends Controller
{

    public function all(){
        $qrs = Qrcode::all();
        return view('user.qrcode', compact('qrs'));
    }

    public function create(){
        $instituciones = Institucion::all();
        return view('user.qrcode_nuevo', compact('instituciones'));
    }

    public function set(Request $request){

        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:20'],
            'desc' => ['required', 'string', 'max:100'],
            'imagenqr' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ])->validateWithBag('createQrCode');

        $inst = Institucion::find($request->get('inst'));
        $uuid = Str::uuid();

        if ($request->file('imagenqr') != null && $inst != null) {
            Storage::disk('public')->put('fotos-codigos-qr/', $request->file('imagenqr'));

            $qr_created = Qrcode::create([
                'name' => $request->get('name'),
                'desc' => $request->get('desc'),
                'institucion_id' => $request->get('inst'),
                'uuid' => $uuid,
                'img_path' => $request->file('imagenqr')->hashName(),
                'qr_path' => $uuid.'.png',
            ]);


            if($inst && Storage::disk('public')->exists('logos-institucion/'.$inst->img_path)) {
                $rgb = explode(",", str_replace(")", "", str_replace("rgb(", "", $request->get('color_picker'))));
                $rgb2 = explode(",", str_replace(")", "", str_replace("rgb(", "", $request->get('color_picker2'))));
                Qrc::format('png')->style('round')->eye('circle')->gradient($rgb[0], $rgb[1], $rgb[2], $rgb2[0], $rgb2[1], $rgb2[2], 'radial')->mergeString(Storage::disk('public')->get('logos-institucion/'.$inst->img_path), .3, true)->size(500)->errorCorrection('H')->generate($uuid, '../public/storage/codigos-qr/' . $uuid . '.png');
            }
            session(['created' => true]);

        }

        return redirect()->route('qrcode');
    }

    public function delete(Qrcode $qr){
        if($qr){
            if(Storage::disk('public')->exists('fotos-codigos-qr/'.$qr->img_path))
                Storage::disk('public')->delete('fotos-codigos-qr/'.$qr->img_path);

            if(Storage::disk('public')->exists('codigos-qr/'.$qr->qr_path))
                Storage::disk('public')->delete('codigos-qr/'.$qr->qr_path);

            $qr->delete();
        }
        return redirect()->route('qrcode');
    }

    public function descargar(Qrcode $qr){
        if(Storage::disk('public')->exists('codigos-qr/'.$qr->qr_path))
            return Storage::disk('public')->download('codigos-qr/'.$qr->qr_path);
    }

    public function imprimir(Qrcode $qr){

        $pdf = \PDF::loadView('user.qrcode_imprimir', ['qr_url' => $qr->qrCode()]);
        return $pdf->stream();
    }
}

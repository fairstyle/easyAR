<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Qrcode extends Model{

    use HasFactory;

    protected $table = 'qr_codes';

    protected $fillable = [
        'name',
        'desc',
        'institucion_id',
        'uuid',
        'img_path',
        'qr_path',
    ];

    protected $hidden = [
        'id',
        'uuid',
        'qr_path',
        'created_at',
        'updated_at',
        'institucion_id'
    ];

    public function qrFoto(): string{
        return ($this->img_path && Storage::disk('public')->exists('fotos-codigos-qr/'.$this->img_path)) ?  Storage::url('fotos-codigos-qr/'.$this->img_path) : '';
    }

    public function qrCode(): string{
        return ($this->qr_path && Storage::disk('public')->exists('codigos-qr/'.$this->qr_path)) ?  Storage::url('codigos-qr/'.$this->qr_path) : '';
    }

}

<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable{

    use HasRoles, HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function updateProfilePhotoName($photo_hashname){
        if($this->profile_photo_path)
            Storage::disk('public')->delete('fotos-perfil/'.$this->profile_photo_path);

        $this->profile_photo_path = $photo_hashname;
        $this->save();
    }

    public function defaultProfilePhotoUrl(int $size): string{
        return 'https://ui-avatars.com/api/?name='.urlencode($this->name).'&color=7F9CF5&background=EBF4FF&size='.$size;
    }

    public function profilePhotoUrlAttribute(int $size = 64): string{
        return ($this->profile_photo_path && Storage::disk('public')->exists('fotos-perfil/'.$this->profile_photo_path)) ?  Storage::url('fotos-perfil/'.$this->profile_photo_path) : $this->defaultProfilePhotoUrl($size);
    }

}

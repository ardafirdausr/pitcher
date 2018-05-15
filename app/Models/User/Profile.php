<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cits;

class Profile extends Model {

    protected $fillable = ['no_telepon', 'jenis_kelamin', 'provinsi', 'kota', 'alamat', 'tentang', 'biodata', 'kota_mengajar'];

    public function user(){
        return $this->belongsTo(User::class);
    }    
}

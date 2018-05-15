<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Identity extends Model
{
    protected $fillable = ['nik', 'nama_bank', 'nomor_rekening', 'pemilik_rekening'];

    public function user(){
        $this->belongsTo(User::class);
    }
}

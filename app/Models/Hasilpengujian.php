<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasilpengujian extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'waktu_uji',
        'verbal',
        'abstrak',
        'bahasa',
        'numerik',
        'skolastik',
        'spasial',
    ];
    public function mahasiswa()
    {
        return $this->belongsTo(mahasiswa::class,'id_user','id');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama',
        'id_user',
        'nim',
        'prodi_id',
        'jurusan_id',
        'nohp',
        'alamat',
        'tgllahir',
        'jeniskelamin',
        'email',
    ];
    public function Hasilpengujian(){
        return $this->hasMany(Hasilpengujian::class,'id_user');
    }
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
    public function prodi()
    {
        return $this->belongsTo(Prodi::class,'prodi_id','id');
    }
}

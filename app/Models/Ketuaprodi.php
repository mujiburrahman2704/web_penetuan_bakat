<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ketuaprodi extends Model
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
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
    public function prodi()
    {
        return $this->belongsTo(Prodi::class,'prodi_id','id');
    }
}

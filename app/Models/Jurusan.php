<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Jurusan extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "jurusans";
    protected $fillable = [
        'nama'
    ];
    public function mahasiswa(){
        return $this->hasMany(mahasiswa::class);
    }
}

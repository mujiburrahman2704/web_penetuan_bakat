<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengujian extends Model
{
    use HasFactory;
    protected $table ='pengujians';
    protected $fillable = [
        'tipe',
        'a',
        'gambara',
        'b',
        'gambarb',
        'c',
        'gambarc',
        'd',
        'gambard',
        'jawaban',
        'gambar'
    ];
}

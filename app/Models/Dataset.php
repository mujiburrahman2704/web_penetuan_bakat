<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
{
    use HasFactory;
    protected $table = 'datasets';
    protected $fillable = [
        'nim',
        'nama',
        'soal1',
        'soal2',
        'soal3',
        'soal4',
        'soal5',
        'soal6',
        'soal7',
        'soal8',
        'soal9',
        'soal10',
        'hasil'
    ];
}

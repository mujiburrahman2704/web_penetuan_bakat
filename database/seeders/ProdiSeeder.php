<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prodi::create(
            ['nama' => 'Teknik Informatika',
            'jurusan_id' => '1']
        );
        Prodi::create(
            ['nama' => 'Teknologi Rekayasa Komputer dan Jaringan',
            'jurusan_id' => '1']
        );
        Prodi::create(
            ['nama' => 'Teknologi Rekayasa Multimedia',
            'jurusan_id' => '1']
        );
    }
}

<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::create(
            ['nama' => 'Teknologi Informasi dan Komputer'],
        );
        Jurusan::create(
            ['nama' => 'Teknik Sipil'],
        );
        Jurusan::create(
            ['nama' => 'Teknik Mesin'],
        );
        Jurusan::create(
            ['nama' => 'Teknik Elektro'],
        );
        Jurusan::create(
            ['nama' => 'Tata Niaga'],
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jenisbakat;
class Jenisbakatseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jenisbakat::create(['nama'=>'Bakat Verbal','deskripsi'=>'Bakat Verbal adalah kemampuan yang menjelaskan seberapa baik seseorang dapat mengerti ide-ide dan konsep yang dinyatakan dalam bentuk kata-kata dan seberapa mudah seseorang dapat berpikir dan memecahkan masalah yang dinyatakan dalam bentuk kata-kata. Profesi yang cocok untuk bakat ini adalah presenter, guru, pengacara dan sebagainya. ']);
        Jenisbakat::create(['nama'=>'Bakat Numerik','deskripsi'=>'Bakat Numerik adalah kemampuan untuk melihat seberapa baik seseorang dapat mengerti ide-ide dan konsep yang dinyatakan dalam bentuk angka-angka, juga dapat melihat seberapa mudah seseorang dapat berpikir dan memecahkan masalah yang dinyatakan dalam bentuk angka. Kemampuan ini dapat dengan mudah dan bekerja dengan baik dalam berhitung dan juga mengukur kemampuan yang diperlukan di kantor dagang, perusahaan, dan sebegainya yang memerlukan perhitungan. Profesi yang cocok untuk bakat ini adalah ahli statistik, akuntan pajak, dosen matematika, ahli logika dan sebagainya. ']);
        Jenisbakat::create(['nama'=>'Bakat Skolastik','deskripsi'=>'Bakat skolastik adalah kemampuan seseorang dalam penalaran, mengurutkan, menciptakan hipotesis, mencari keteraturan atau pola numerik. Kemampuan ini merupakan kombonasi dari bakat verbal dan numerik. Profesi yang cocok untuk bakat ini adalah akuntan dan pemrograman komputer. ']);
        Jenisbakat::create(['nama'=>'Bakat Spasial','deskripsi'=>'Bakat relasi ruang adalah bakat yang berkaitan dengan kemampuan visualisasi, mengamati atau membayangkan bentuk dari objek-objek dasar dua dimensi ke dalam bentuk tiga dimensi. Kemampuan ini dapat dengan mudah mengerjakan beberapa jenis tugas matematika, misalnya geometri. Tes ini juga dapat mengungkapkan bagaimana sesorang dapat membayangkan atau membentuk gambar-gambar dari objek padat dengan hanya melihat rencana diatas kertas dan memvisualisasi bentuk objek dalam bentuk tiga dimensi. Profesi yang cocok untuk bakat ini adalah arsitek, seniman, designer grafis dan ahli fotografi. ']);
        Jenisbakat::create(['nama'=>'Bakat Bahasa','deskripsi'=>'Bakat Bahasa (linguistik) adalah kemampuan yang berhubungan dengan penggunaan bahasa dan kosakata, baik yang tertulis maupun yang diucapkan. Bakat ini terkait dengan bunyi, arti, urutan dan struktur, serta fungsi dari kosakata dan Bahasa. Profesi yang cocok untuk bakat bahasa (linguistik) adalah sastrawan, jurnalis, pengacara, wartawan, dan sebagainya. ']);
        Jenisbakat::create(['nama'=>'Bakat Abstrak','deskripsi'=>'Bakat abstrak adalah kemampuan untuk mengukur seberapa baik seseorang mengerti ide dan konsep yang tidak dinyatakan dalam bentuk kata-kata atau angka tetapi hanya dinyatakan dalam diagram, simbol, atau blue print. Kemampuan ini dapat memecahkan masalah jika masalah itu disajikan dalam arti ukurannya, bentuknya, posisinya, besarnya atau warna yang tidak bersifat verbal dan numerikal. Profesi yang cocok untuk bakat ini adalah montir, ahli kimia, ahli ilmu alam atau ahli biologi, dan ahli teknik. ']);
    }
}

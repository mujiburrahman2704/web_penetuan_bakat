<?php
namespace App\Http\Controllers;
date_default_timezone_set('Asia/jakarta');

use App\Models\Dataset;
use App\Models\Datates;
use App\Models\Soal;
use App\Models\User;
use App\Models\mahasiswa;
use App\Models\Prodi;
use App\Models\Jurusan;
use App\Models\Hasilpengujian;
use App\Models\Jenisbakat;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use PDF;

class Data extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        // dd($id);
        $mahasiswa = Mahasiswa::where('id_user',$id)->first();
        // dd($mahasiswa->id);
        $data = Hasilpengujian::where('id_user', $mahasiswa->id)->get();
        // dd($data);

        return view('user.homepage', compact('data'));
    }
    public function profile(){
        $id = Auth::user()->id;

        $data = mahasiswa::where('id', $id)->first();
        $prodi = Prodi::get();
        $jurusan = Jurusan::get();
        // $data = DB::table('hasilpengujians')->where('id', $id)->get();
        // dd($data->user);
        return view('user.profile', compact('data','prodi','jurusan'));
    }

    public function uji(){
        return view('user.uji');
    }

    public function test($id){

        if ($id == 1){
            $tipe = "verbal";
        }if($id == 2 ){
            $tipe = "numerik";
        }if($id == 3){
            $tipe = "skolastik";
        }if($id == 4){
            $tipe = "spasial";
        }if($id == 5){
            $tipe = "bahasa";
        }if($id == 6){
            $tipe = "abstrak";
        }
        $verbal = session()->get('bakatverbal');
        $numerik = session()->get('numerik');
        $skolastik = session()->get('skolastik');
        $spasial = session()->get('spasial');
        $bahasa = session()->get('bahasa');
        $abstrak = session()->get('abstrak');
        $soal = DB::table('pengujians')->where('tipe', $tipe)->get();
        $jumlah = DB::table('pengujians')->where('tipe', $tipe)->count();
        return view('user.test', compact('soal','id','tipe','jumlah','verbal','numerik','skolastik', 'spasial', 'bahasa', 'abstrak'));
    }
    public function histori(){
        $id = Auth::user()->id;
        $data = Hasilpengujian::where('id_user', $id)->get();
        return view('user.homepage', compact('data'));
    }
    public function upload(request $request, $id){

        $tipe = $request->tipe;
        echo $tipe;
        Datates::truncate();
        $kosong = 0;
        if ($tipe == 'verbal'){
            Datates::create([
                'soal1' => $request->pilihan[1],
                'soal2' => $request->pilihan[2],
                'soal3' => $request->pilihan[3],
                'soal4' => $request->pilihan[4],
                'soal5' => $request->pilihan[5],
                'soal6' => $request->pilihan[6],
                'soal7' => $request->pilihan[7],
                'soal8' => $request->pilihan[8],
                'soal9' => $request->pilihan[9],
                'soal10' => $request->pilihan[10],
                'hasil'=>''
            ]);
            $a = shell_exec(escapeshellcmd("python C:/xampp/htdocs/data/public/python/verbal.py"));
            $kita = explode('_______________________', $a);
            $hasil = $kita[0];
            session()->put('bakatverbal', $hasil);
        }
        if ($tipe == 'numerik'){
            Datates::create([
                'soal1' => $request->pilihan[21],
                'soal2' => $request->pilihan[22],
                'soal3' => $request->pilihan[23],
                'soal4' => $request->pilihan[24],
                'soal5' => $request->pilihan[25],
                'soal6' => $request->pilihan[26],
                'soal7' => $request->pilihan[27],
                'soal8' => $request->pilihan[28],
                'soal9' => $request->pilihan[29],
                'soal10' => $request->pilihan[30],
                'hasil'=>''
            ]);
            $a = shell_exec(escapeshellcmd("python C:/xampp/htdocs/data/public/python/numerik.py"));
            $kita = explode('_______________________', $a);
            $hasil = $kita[0];
            session()->put('numerik', $hasil);
        }
        if ($tipe == 'skolastik'){
            Datates::create([
                'soal1' => $request->pilihan[31],
                'soal2' => $request->pilihan[32],
                'soal3' => $request->pilihan[33],
                'soal4' => $request->pilihan[34],
                'soal5' => $request->pilihan[35],
                'soal6' => $request->pilihan[36],
                'soal7' => $request->pilihan[37],
                'soal8' => $request->pilihan[38],
                'soal9' => $request->pilihan[39],
                'soal10' => $request->pilihan[40],
                'hasil'=>''
            ]);
            $a = shell_exec(escapeshellcmd("python C:/xampp/htdocs/data/public/python/skolastik.py"));
            $kita = explode('_______________________', $a);
            $hasil = $kita[0];
            session()->put('skolastik', $hasil);
        }
        if ($tipe == 'spasial'){
            Datates::create([
                'soal1' => $request->pilihan[51],
                'soal2' => $request->pilihan[52],
                'soal3' => $request->pilihan[53],
                'soal4' => $request->pilihan[54],
                'soal5' => $request->pilihan[55],
                'soal6' => $request->pilihan[56],
                'soal7' => $request->pilihan[57],
                'soal8' => $request->pilihan[58],
                'soal9' => $request->pilihan[59],
                'soal10' => $request->pilihan[60],
                'hasil'=>''
            ]);
            $a = shell_exec(escapeshellcmd("python C:/xampp/htdocs/data/public/python/spasial.py"));
            $kita = explode('_______________________', $a);
            $hasil = $kita[0];
            session()->put('spasial', $hasil);
        }
        if ($tipe == 'bahasa'){
            Datates::create([
                'soal1' => $request->pilihan[11],
                'soal2' => $request->pilihan[12],
                'soal3' => $request->pilihan[13],
                'soal4' => $request->pilihan[14],
                'soal5' => $request->pilihan[15],
                'soal6' => $request->pilihan[16],
                'soal7' => $request->pilihan[17],
                'soal8' => $request->pilihan[18],
                'soal9' => $request->pilihan[19],
                'soal10' => $request->pilihan[20],
                'hasil'=>''
            ]);
            $a = shell_exec(escapeshellcmd("python C:/xampp/htdocs/data/public/python/bahasa.py"));
            $kita = explode('_______________________', $a);
            $hasil = $kita[0];
            session()->put('bahasa', $hasil);
        }
        if ($tipe == 'abstrak'){
            Datates::create([
                'soal1' => $request->pilihan[41],
                'soal2' => $request->pilihan[42],
                'soal3' => $request->pilihan[43],
                'soal4' => $request->pilihan[44],
                'soal5' => $request->pilihan[45],
                'soal6' => $request->pilihan[46],
                'soal7' => $request->pilihan[47],
                'soal8' => $request->pilihan[48],
                'soal9' => $request->pilihan[49],
                'soal10' => $request->pilihan[50],
                'hasil'=>''
            ]);
            $a = shell_exec(escapeshellcmd("python C:/xampp/htdocs/data/public/python/abstrak.py"));
            $kita = explode('_______________________', $a);
            $hasil = $kita[0];
            session()->put('abstrak', $hasil);
        }
        if($id == 7){
            return redirect(route('hasil'));
        }else{
            return redirect(route('test',$id));
        }
    }
    public function destroyss($id){
        session()->put('bakatverbal', '');
        session()->put('numerik', '');
        session()->put('skolastik', '');
        session()->put('spasial', '');
        session()->put('bahasa', '');
        session()->put('abstrak', '');
        return redirect(route('test', $id));
    }
    public function update(Request $request){
        // dd($request);
        $id = Auth::user()->id;
        $mahasiswa = Mahasiswa::where('id_user',$id)->first();
        // dd($mahasiswa);
        $data = Mahasiswa::find($mahasiswa->id);
        $data->nama = $request->input('nama');
        $data->nim = $request->input('nim');
        $data->jurusan_id = 1;
        $data->prodi_id = $request->input('prodi');
        $data->nohp = $request->input('nohp');
        $data->alamat = $request->input('alamat');
        $data->email = $request->input('email');
        $data->jeniskelamin = $request->input('jeniskelamin');
        $data->tgllahir = $request->input('tgllahir');
        $data->update();
        return redirect()->back()->with('status','Update Success');
    }
    public function hasil(){
        $verbal = session()->get('bakatverbal');
        $numerik = session()->get('numerik');
        $skolastik = session()->get('skolastik');
        $spasial = session()->get('spasial');
        $bahasa = session()->get('bahasa');
        $abstrak = session()->get('abstrak');
        $id = Auth::user()->id;
        $data = HasilPengujian::where('id_user', $id)->get();
        $user = User::where('id', $id)->get();

        return redirect(route('tampilhasil'));
    }
    public function tampilhasil(){
        $verbal = session()->get('bakatverbal');
        $numerik = session()->get('numerik');
        $skolastik = session()->get('skolastik');
        $spasial = session()->get('spasial');
        $bahasa = session()->get('bahasa');
        $abstrak = session()->get('abstrak');

        $id = Auth::user()->id;
        // dd($id);
        // $mahasiswa = Mahasiswa::where('id_user',$id)->first();
        // dd($mahasiswa->id);
        // dd($verbal);
        // dd($numerik);
        // dd($skolastik);
        // dd($spasial);
        // dd($bahasa);
        // dd($abstrak);
        // dd($id);
        $mahasiswa = Mahasiswa::where('id_user',$id)->first();
        // dd($mahasiswa);
        Hasilpengujian::create([
            'id_user' => $mahasiswa->id,
            'waktu_uji' => date('H:i:s'),
            'abstrak' => $abstrak,
            'verbal' => $verbal,
            'bahasa' => $bahasa,
            'spasial' => $spasial,
            'skolastik' => $skolastik,
            'numerik' => $numerik
        ]);

        $data = HasilPengujian::where('id_user',$id)->latest()->first();
        $deskripsi = Jenisbakat::all();
        $id = Auth::User()->email;
        $user = mahasiswa::where('email', $id)->get();
        // dd(substr(trim($data->abstrak), 0, -1));
        return view('user.hasil', compact('user','data','deskripsi'));
    }

    public function printhasil(){
        $id = Auth::User()->id;
        $data = HasilPengujian::where('id_user',$id)->latest()->first();
        // dd($data);
        $deskripsi = Jenisbakat::all();
        $email = Auth::User()->email;
        $user = mahasiswa::where('email', $email)->first();

        $pdf = PDF::loadview('user.print', compact('user','data','deskripsi'))->setPaper('A4','potrait');
        $pdf->getDomPDF()->setHttpContext(
        stream_context_create([
                'ssl' => [
                    'allow_self_signed'=> TRUE,
                    'verify_peer' => FALSE,
                    'verify_peer_name' => FALSE,
                ]
            ])
        );
        return $pdf->download('laporan.pdf');
    }

    public function tampil_pdf(){
        $verbal = session()->get('bakatverbal');
        $numerik = session()->get('numerik');
        $skolastik = session()->get('bakatverbal');
        $spasial = session()->get('bakatverbal');
        $bahasa = session()->get('bakatverbal');
        $abstrak = session()->get('abstrak');
        $id = Auth::user()->id;
        $data = HasilPengujian::where('id_user', $id)->get();
        $user = User::where('id', $id)->get();
        return view('user.histori', compact('verbal','numerik','user','skolastik','spasial','bahasa','data'));
    }
}

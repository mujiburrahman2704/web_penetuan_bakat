<?php

namespace App\Http\Controllers;

use App\Models\Hasilpengujian;
use App\Models\Jurusan;
use App\Models\ketuajurusan;
use App\Models\mahasiswa;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Kajur extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $login = Auth::user()->email;
        $user = ketuajurusan::where('email', $login)->first();
        $data = DB::table('hasilpengujians')->get();
        $count = DB::table('hasilpengujians')->count();
        $mhs = DB::table('users')->where('isAdmin', '0')->count();
        $verbalti = Hasilpengujian::where('verbal','Bakat Verbal')->get()->count();
        return view('kajur.homepage', compact('data','count','mhs','user','verbalti'));
    }

    public function datamahasiswa()
    {
        $login = Auth::user()->email;
        $user = ketuajurusan::where('email', $login)->first();
        $mhs = mahasiswa::all();
        $data = User::first();
        $u = $data->post;
        return view('kajur.datamahasiswa', compact('mhs','data','user','login'));
    }

    public function histori()
    {
        $login = Auth::user()->email;
        $user =  ketuajurusan::where('email', $login)->first();
        $title = "Histori";
        $data = Hasilpengujian::all();
        
        return view('kajur.histori', compact('title','data','login','user'));
    }

    public function editdatamahasiswa($id)
    {
        $jurusan = Jurusan::all();
        $prodi = Prodi::all();
        $data = User::where('id', $id)->get();
        return view('kajur.editdatamahasiswa', compact('jurusan','prodi','data'));
    }

    public function datakajur()
    {
        $login = Auth::user()->email;
        $user = ketuajurusan::where('email', $login)->first();
        $data = ketuajurusan::where('email', $login)->first();
        $prodi = Prodi::all();
        $jurusan = Jurusan::all();
        return view('kajur.datakajur', compact('data','prodi','user','jurusan'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
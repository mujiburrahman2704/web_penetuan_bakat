<?php

namespace App\Http\Controllers;

use App\Models\Hasilpengujian;
use App\Models\Jurusan;
use App\Models\ketuajurusan;
use App\Models\Ketuaprodi;
use App\Models\mahasiswa;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $login = Auth::user()->email;
        $user = Ketuaprodi::where('email', $login)->first();
        $data = DB::table('hasilpengujians')->get();
        $count = DB::table('hasilpengujians')->count();
        $mhs = DB::table('users')->where('isAdmin', '0')->count();
        $verbalti = Hasilpengujian::where('verbal','Bakat Verbal')->get()->count();
        return view('prodi.homepage', compact('data','count','mhs','user','verbalti'));
    }

    public function datamahasiswa()
    {
        $login = Auth::user()->email;
        $user = Ketuaprodi::where('email', $login)->first();
        $mhs = mahasiswa::where('prodi_id', $user->prodi_id)->get();
        $data = User::first();
        $u = $data->post;
        return view('prodi.datamahasiswa', compact('mhs','data','user','login'));
    }

    public function histori()
    {
        $login = Auth::user()->email;
        $user =  Ketuaprodi::where('email', $login)->first();
        $title = "Histori";
        $data = Hasilpengujian::all();
        
        return view('prodi.histori', compact('title','data','login','user'));
    }

    public function editdatamahasiswa($id)
    {
        $jurusan = Jurusan::all();
        $prodi = Prodi::all();
        $data = User::where('id', $id)->get();
        return view('prodi.editdatamahasiswa', compact('jurusan','prodi','data'));
    }

    public function datakajur()
    {
        $login = Auth::user()->email;
        $user = Ketuaprodi::where('email', $login)->first();
        $data = Ketuaprodi::where('email', $login)->first();
        $prodi = Prodi::all();
        $jurusan = Jurusan::all();
        return view('prodi.dataprodi', compact('data','prodi','user','jurusan'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodi = Prodi::all();
        $jurusan = Jurusan::all();
        return view('prodi.adddata', compact('jurusan', 'prodi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'nim' =>['required', 'string', 'max:15'],
            'prodi_id' =>['required', 'string', 'max:255'],
            'jurusan_id' =>['required', 'string', 'max:255'],
            'nohp' =>['required', 'string', 'max:255'],
            'alamat' =>['required', 'string', 'max:255'],
            'jeniskelamin' =>['required', 'string', 'max:255'],
            'tgllahir' =>['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        User::create([
            'email' => $request->email,
            'isAdmin' => 0,
            'password' => Hash::make($request->password),
        ]);
        $user = User::orderBy('created_at','desc')->get();
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->id_user = $user[0]->id;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->prodi_id = $request->prodi_id;
        $mahasiswa->jurusan_id = $request->jurusan_id;
        $mahasiswa->nohp = $request->nohp;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->jeniskelamin = $request->jeniskelamin;
        $mahasiswa->tgllahir = $request->tgllahir;
        $mahasiswa->email = $request->email;
        $mahasiswa->save();
        return redirect(route('prodimhs'));
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
        $login = Auth::user()->email;
        $user = Ketuaprodi::where('email', $login)->first();
        $jurusan = Jurusan::all();
        $prodi = Prodi::all();
        $data = mahasiswa::where('id', $id)->first();
        return view('prodi.editdata', compact('jurusan', 'prodi', 'data', 'user'));
    }
    public function editdiri()
    {
        $login = Auth::user()->email;
        $user = Ketuaprodi::where('email', $login)->first();
        $jurusan = Jurusan::all();
        $prodi = Prodi::all();
        $data = Ketuaprodi::where('email', $login)->first();
        return view('prodi.editdiri', compact('jurusan', 'prodi', 'data', 'user'));
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
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'nim' =>['required', 'string', 'max:15'],
            'prodi_id' =>['required', 'string', 'max:255'],
            'jurusan_id' =>['required', 'string', 'max:255'],
            'nohp' =>['required', 'string', 'max:255'],
            'alamat' =>['required', 'string', 'max:255'],
            'jeniskelamin' =>['required', 'string', 'max:255'],
            'tgllahir' =>['required', 'string', 'max:255'],
        ]);
        mahasiswa::where('id', $id)->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi_id' => $request->jurusan_id,
            'jurusan_id' => $request->jurusan_id,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
            'jeniskelamin' => $request->jeniskelamin,
            'tgllahir' => $request->tgllahir,
            'email' => $request->email,
        ]);
        return redirect(route('prodimhs'));
    }
    public function updatediri(Request $request, $id)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'nidn' =>['required', 'string', 'max:15'],
            'prodi_id' =>['required', 'string', 'max:255'],
            'jurusan_id' =>['required', 'string', 'max:255'],
            'nohp' =>['required', 'string', 'max:255'],
            'alamat' =>['required', 'string', 'max:255'],
            'jeniskelamin' =>['required', 'string', 'max:255'],
            'tgllahir' =>['required', 'string', 'max:255'],
        ]);
        Ketuaprodi::where('id', $id)->update([
            'nama' => $request->nama,
            'nidn' => $request->nidn,
            'prodi_id' => $request->prodi_id,
            'jurusan_id' => $request->jurusan_id,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
            'jeniskelamin' => $request->jeniskelamin,
            'tgllahir' => $request->tgllahir,
            'email' => $request->email,
        ]);
        return redirect(route('prodimhs'));
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

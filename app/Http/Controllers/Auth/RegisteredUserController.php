<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use App\Models\User;
use App\Models\mahasiswa;
use App\Models\Prodi;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        $prodi = Prodi::all() ;
        return view('auth.register', compact('prodi','jurusan'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
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

        $user = User::create([
            'email' => $request->email,
            'isAdmin' => 0,
            'password' => Hash::make($request->password),
        ]);
        $user_id = User::where('email', $request->email)->first();
        mahasiswa::create([
            'nama' => $request->nama,
            'id_user' => $user_id->id,
            'nim' => $request->nim,
            'prodi_id' => $request->jurusan_id,
            'jurusan_id' => $request->jurusan_id,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'jeniskelamin' => $request->jeniskelamin,
            'tgllahir' => $request->tgllahir,
        ]);

        event(new Registered($user));

        // Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <section id="header">
        @include('partials.headeradmin')
    </section>
    <section id="table">
        <div class="container flex mx-auto mt-5 w-full">
            <div class="w-full rounded-3xl overflow-hidden shadow-lg my-8">
                <form action="{{ route('post') }}" method="POST">
                    @csrf
                    <div class="flex flex-col mx-36 space-y-4">
                        <div class="grid grid-cols-5 gap-3 mx-4">
                            <label for="nim" class="col-start-1 col-end-2">Nim</label>
                            <input type="text" name="nim" id="nim"
                                class="col-start-2 col-end-5 rounded-lg shadow-lg w-full">
                        </div>
                        <div class="grid grid-cols-5 gap-3 mx-4">
                            <label for="nama" class="col-start-1 col-end-2">Nama</label>
                            <input type="text" name="nama" id="nama"
                                class="col-start-2 col-end-5 rounded-lg shadow-lg w-full">
                        </div>
                        <div class="grid grid-cols-5 gap-3 mx-4">
                            <label for="jk" class="col-start-1 col-end-2">Jenis Kelamin</label>
                            <select name="jeniskelamin" id="jk"
                                class="col-start-2 col-end-5 rounded-lg shadow-lg w-full">
                                <option>- Pilih -</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="grid grid-cols-5 gap-3 mx-4">
                            <label for="email" class="col-start-1 col-end-2">Email</label>
                            <input type="text" name="email" id="email"
                                class="col-start-2 col-end-5 rounded-lg shadow-lg w-full">
                        </div>
                        <div class="grid grid-cols-5 gap-3 mx-4">
                            <label for="nohp" class="col-start-1 col-end-2">No Handphone</label>
                            <input type="text" name="nohp" id="nohp"
                                class="col-start-2 col-end-5 rounded-lg shadow-lg w-full">
                        </div>
                        <div class="grid grid-cols-5 gap-3 mx-4">
                            <label for="alamat" class="col-start-1 col-end-2">Alamat</label>
                            <input type="text" name="alamat" id="alamat"
                                class="col-start-2 col-end-5 rounded-lg shadow-lg w-full">
                        </div>
                        <div class="grid grid-cols-5 gap-3 mx-4">
                            <label for="jurusan" class="col-start-1 col-end-2">Jurusan</label>
                            {{-- <input type="text" name="" id="jurusan" class="col-start-2 col-end-5 rounded-lg shadow-lg w-full"> --}}
                            <select name="jurusan_id" id="jurusan"
                                class="col-start-2 col-end-5 rounded-lg shadow-lg w-full">
                                <option>- Pilih -</option>
                                @foreach ($jurusan as $j)
                                    <option value="{{ $j->id }}">{{ $j->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="grid grid-cols-5 gap-3 mx-4">
                            <label for="prodi" class="col-start-1 col-end-2">Prodi</label>
                            {{-- <input type="text" name="" id="jurusan" class="col-start-2 col-end-5 rounded-lg shadow-lg w-full"> --}}
                            <select name="prodi_id" id="prodi"
                                class="col-start-2 col-end-5 rounded-lg shadow-lg w-full">
                                <option>- Pilih -</option>
                                @foreach ($prodi as $p)
                                    <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Tanggal Lahir --}}
                        <div class="grid grid-cols-5 gap-3 mx-4">
                            <label for="tgllahir" class="col-start-1 col-end-2">Tanggal Lahir</label>
                            <input type="date" name="tgllahir" id="tgllahir"
                                class="col-start-2 col-end-5 rounded-lg shadow-lg w-full">
                        </div>

                        <!-- Password -->
                        <div class="grid grid-cols-5 gap-3 mx-4">
                            <label for="password" class="col-start-1 col-end-2">Password</label>
                            <input id="password" class="col-start-2 col-end-5 rounded-lg shadow-lg w-full"
                                type="password" name="password" required autocomplete="new-password" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="grid grid-cols-5 gap-3 mx-4">
                            <label for="password_confirmation">Confirm Your Password</label>
                            <input id="password_confirmation" class="col-start-2 col-end-5 rounded-lg shadow-lg w-full"
                                type="password" name="password_confirmation" required />
                        </div>
                        <div class="flex justify-end py-2">
                            <button type="submit" class="py-1 px-5 rounded-lg shadow-lg text-white hover:text-black"
                                style="background-color: rgba(64, 94, 79, 1)">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>

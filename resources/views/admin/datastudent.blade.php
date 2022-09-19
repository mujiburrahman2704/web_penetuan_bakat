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

    <section id="home">
        <div class="container border-b-2 border-black mx-auto my-8">
            <h2 class="text-center uppercase font-serif text-lg">Data Mahasiswa</h2>
        </div>
        <div class="container my-8 mx-auto">
            <div class="border rounded-lg shadow-xl mx-10">
                <div class="border-b-2 border-black mx-2 my-4">
                    <h2 class="font-serif font-bold text-2xl">Data Diri</h2>
                </div>
                <form action="{{ route('edits', $data->id) }}" method="POST">
                    @csrf
                    <div class="flex flex-wrap">
                        <div class="w-full justify-center px-20 py-10 relative lg:w-1/2">
                            <div class="flex-col space-y-8">
                                <div class="grid grid-cols-3 gap-2">
                                    <h2 class="col-start-1 self-center">Nama Mahasiswa</h2>
                                    <input type="hidden" name="id" id="id" value="{{ $data->id }}">
                                    <input type="text" name="nama" id="nama" value="{{ $data->nama }}"
                                        class="col-start-2 col-span-2 py-2 bg-gray-200 border-0 rounded-md">
                                </div>
                                <div class="grid grid-cols-3 gap-2">
                                    <h2 class="col-start-1 self-center">NIM</h2>
                                    <input type="text" name="nim" id="nim" value='{{ $data->nim }}'
                                        class="col-start-2 col-span-2 py-2 bg-gray-200 border-0 rounded-md">
                                </div>
                                <div class="grid grid-cols-3 gap-2">
                                    <h2 class="col-start-1 self-center">Prodi</h2>
                                    <select name="prodi_id" id="prodi"
                                        class="col-start-2 col-span-2 py-2 bg-gray-200 border-0 rounded-md">
                                        <option value="{{ $data->prodi_id }}">{{ $data->prodi->nama }}</option>
                                        @foreach ($prodi as $p)
                                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="grid grid-cols-3 gap-2">
                                    <h2 class="col-start-1 self-center">Jurusan</h2>
                                    <select name="jurusan_id" id="prodi"
                                        class="col-start-2 col-span-2 py-2 bg-gray-200 border-0 rounded-md">
                                        <option value="{{ $data->jurusan_id }}">{{ $data->jurusan->nama }}</option>
                                        @foreach ($jurusan as $j)
                                            <option value="{{ $j->id }}">{{ $j->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="grid grid-cols-3 gap-2">
                                    <h2 class="col-start-1 self-center">Email</h2>
                                    <input type="text" name="email" id="email" value="{{ $data->email }}"
                                        class="col-start-2 col-span-2 py-2 bg-gray-200 border-0 rounded-md">
                                </div>
                            </div>
                        </div>
                        <div class="w-full self-center px-20 py-10 lg:justify-end lg:w-1/2">
                            <div class="flex-col space-y-8">
                                <div class="grid grid-cols-3 gap-2">
                                    <h2 class="col-start-1 self-center">No Hp</h2>
                                    <input type="text" name="nohp" id="nohp" value="{{ $data->nohp }}"
                                        class="col-start-2 col-span-2 py-2 bg-gray-200 border-0 rounded-md">
                                </div>
                                <div class="grid grid-cols-3 gap-2">
                                    <h2 class="col-start-1 self-center">Alamat</h2>
                                    <input type="text" name="alamat" id="alamat" value='{{ $data->alamat }}'
                                        class="col-start-2 col-span-2 py-2 bg-gray-200 border-0 rounded-md">
                                </div>
                                <div class="grid grid-cols-3 gap-2">
                                    <h2 class="col-start-1 self-center">Jenis Kelamin</h2>
                                    <select name="jeniskelamin" id="jk"
                                        class="col-start-2 col-span-2 py-2 bg-gray-200 border-0 rounded-md">
                                        <option value="{{ $data->jeniskelamin }}">{{ $data->jeniskelamin }}</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="grid grid-cols-3 gap-2">
                                    <h2 class="col-start-1 self-center">Tanggal Lahir</h2>
                                    <input type="date" name="tgllahir" id="tgllahir" value="{{ $data->tgllahir }}"
                                        class="col-start-2 col-span-2 py-2 bg-gray-200 border-0 rounded-md">
                                </div>
                                <div class="grid grid-cols-3 gap-2">
                                    <button type="submit" class="shadow-lg py-1 rounded-lg text-white"
                                        style="background-color: rgba(64, 94, 79, 1)">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>

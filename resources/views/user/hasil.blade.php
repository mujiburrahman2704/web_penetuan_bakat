<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <section id="header">
        @include('partials.headeruser')
    </section>
    <section>
        <div class="container flex mx-auto">
            <div class="flex justify-center w-full py-4 border-b-2 border-black mb-5 mt-2s">
                <h3 class="text-4xl uppercase font-bold text-black">Hasil Pengujian</h3>
            </div>
        </div>
    </section>

    <section id="data">

        <div class="container flex mx-auto mt-5 w-full flex-col shadow-lg rounded-lg bg-gray-200">
            <div>


                <div class="w-full rounded-t-2xl overflow-hidden">
                    <div class="text-black border-b-2 border-black rounded-t-2xl">
                        <h1 class="py-2 px-4 text-3xl font-bold">Data Diri Mahasiswa</h1>
                    </div>
                    <div class="w-full py-2 px-4">
                        <div class="w-1/2 grid grid-cols-3">
                            <h2 class="col-start-1 col-span-1">Nama</h2>
                            <h2 class="col-start-2 col-span-1">:</h2>
                            <h2 class="col-start-3 col-span-1">{{ $user[0]->nama }}</h2>
                        </div>
                        <div class="w-1/2 grid grid-cols-3">
                            <h2 class="col-start-1 col-span-1">NIM</h2>
                            <h2 class="col-start-2 col-span-1">:</h2>
                            <h2 class="col-start-3 col-span-1">{{ $user[0]->nim }}</h2>
                        </div>
                        <div class="w-1/2 grid grid-cols-3">
                            <h2 class="col-start-1 col-span-1">Prodi</h2>
                            <h2 class="col-start-2 col-span-1">:</h2>
                            <h2 class="col-start-3 col-span-1">{{ $user[0]->prodi->nama }}</h2>
                        </div>
                        <div class="w-1/2 grid grid-cols-3">
                            <h2 class="col-start-1 col-span-1">Tanggal & waktu Pengujian</h2>
                            <h2 class="col-start-2 col-span-1">:</h2>
                            <h2 class="col-start-3 col-span-1">{{ $user[0]->created_at }}</h2>
                        </div>
                    </div>
                </div>
                <div class="w-full rounded-t-2xl overflow-hidden">
                    <div class="text-black border-b-2 border-black rounded-t-2xl">
                        <h1 class="py-2 px-4 text-3xl font-bold">Hasil Pengujian</h1>
                    </div>
                    <div class="w-full py-2 px-4">
                        <div class="w-1/2 grid grid-cols-3">
                            <h2 class="col-start-1 col-span-1">Bakat Verbal</h2>
                            <h2 class="col-start-2 col-span-1">:</h2>
                            <h2 class="col-start-3 col-span-1">{{ $data->verbal }}</h2>
                        </div>
                        <div class="w-1/2 grid grid-cols-3">
                            <h2 class="col-start-1 col-span-1">Bakat Numerikal</h2>
                            <h2 class="col-start-2 col-span-1">:</h2>
                            <h2 class="col-start-3 col-span-1">{{ $data->numerik }}</h2>
                        </div>
                        <div class="w-1/2 grid grid-cols-3">
                            <h2 class="col-start-1 col-span-1">Bakat Skolastik</h2>
                            <h2 class="col-start-2 col-span-1">:</h2>
                            <h2 class="col-start-3 col-span-1">{{ $data->skolastik }}</h2>
                        </div>
                        <div class="w-1/2 grid grid-cols-3">
                            <h2 class="col-start-1 col-span-1">Bakat Abstrak</h2>
                            <h2 class="col-start-2 col-span-1">:</h2>
                            <h2 class="col-start-3 col-span-1">{{ $data->abstrak }}</h2>
                        </div>
                        <div class="w-1/2 grid grid-cols-3">
                            <h2 class="col-start-1 col-span-1">Bakat Spasial</h2>
                            <h2 class="col-start-2 col-span-1">:</h2>
                            <h2 class="col-start-3 col-span-1">{{ $data->spasial }}</h2>
                        </div>
                        <div class="w-1/2 grid grid-cols-3">
                            <h2 class="col-start-1 col-span-1">Bakat Bahasa</h2>
                            <h2 class="col-start-2 col-span-1">:</h2>
                            <h2 class="col-start-3 col-span-1">{{ $data->bahasa }}</h2>
                        </div>
                    </div>
                </div>
                <div class="w-full rounded-t-2xl overflow-hidden shadow-lg">
                    <div class="text-black border-b-2 border-black rounded-t-2xl">
                        <h1 class="py-2 px-4 text-3xl font-bold">Deskripsi</h1>
                    </div>
                    <div class="w-full py-2 px-4 space-y-4">

                        @if (substr(trim($data->verbal), 0, -1) == 'Bakat Verba')
                            <div class="flex flex-col">
                                <h2 class="font-bold">{{ $deskripsi[0]->nama }}</h2>
                                <h2 class="text-justify">{{ $deskripsi[0]->deskripsi }}</h2>
                            </div>
                        @endif
                        @php
                            // dd($data);
                        @endphp

                        @if (substr(trim($data->numerik), 0, -1) == 'Bakat Numeri')
                            <div class="flex flex-col">
                                <h2 class="font-bold">{{ $deskripsi[1]->nama }}</h2>
                                <h2 class="text-justify">{{ $deskripsi[1]->deskripsi }}</h2>
                            </div>
                        @endif

                        @if (substr(trim($data->skolastik), 0, -1) === 'Bakat Skolasti')
                            <div class="flex flex-col">
                                <h2 class="font-bold">{{ $deskripsi[2]->nama }}</h2>
                                <h2 class="text-justify">{{ $deskripsi[2]->deskripsi }}</h2>
                            </div>
                        @endif

                        @if (substr(trim($data->spasial), 0, -1) == 'Bakat Spasia')
                            <div class="flex flex-col">
                                <h2 class="font-bold">{{ $deskripsi[3]->nama }}</h2>
                                <h2 class="text-justify">{{ $deskripsi[3]->deskripsi }}</h2>
                            </div>
                        @endif

                        @if (substr(trim($data->bahasa), 0, -1) == 'Bakat Bahas')
                            <div class="flex flex-col">
                                <h2 class="font-bold">{{ $deskripsi[4]->nama }}</h2>
                                <h2 class="text-justify">{{ $deskripsi[4]->deskripsi }}</h2>
                            </div>
                        @endif

                        @if (substr(trim($data->abstrak), 0, -1) === 'Bakat Abstra')
                            {{-- {{ 'masokk' }} --}}
                            <div class="flex flex-col">
                                <h2 class="font-bold">{{ $deskripsi[5]->nama }}</h2>
                                <h2 class="text-justify">{{ $deskripsi[5]->deskripsi }}</h2>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="flex justify-end mb-10">
                <form action="{{ route('printhasil') }}" method="get">
                    <button type="submit"
                        class="px-5 py-3 text-white bg-gray-500 hover:bg-gray-600 rounded-xl  font-bold">Print</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>

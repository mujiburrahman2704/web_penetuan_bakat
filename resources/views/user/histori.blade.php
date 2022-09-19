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
                <h3 class="text-4xl uppercase font-bold text-black">Beranda mahasiswa</h3>
            </div>
        </div>
    </section>

    <section id="table">
        <div class="container flex mx-auto mt-5 w-full">
            <div class="w-full rounded-t-2xl  overflow-hidden shadow-lg">
                <div class="text-white" style="background-color: rgba(64, 94, 79, 1)">
                    <h1 class="py-2 px-4">Histori Pengujian</h1>
                </div>
                <div class="px-6 py-4">
                    <div class="w-full">
                        <table class="divide-y divide-gray-300 border rounded-lg w-full" style="background-color: rgba(64, 94, 79, 1)" id="dataTable">
                            <thead>
                                <tr>
                                    <th class="px-6 py-2 text-xs text-white">
                                        No
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Nama
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Nim
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Hasil Pengujian
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($data as $i => $dt)
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="text-center whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ ++$i }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900">
                                                {{ $dt->nama }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $dt->nim }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $dt->hasil_pengujian }}
                                        </td>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="#"
                                                class="inline-block text-white py-1 px-2 rounded-lg text-center border" style="background-color: rgba(64, 94, 79, 1)">
                                                Detail
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>

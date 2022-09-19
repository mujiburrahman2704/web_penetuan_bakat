<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @php
        function bulan_indo($inp)
        {
            $bulan = [
                1 => 'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember',
            ];
            // variabel pecahkan 0 = tanggal
            // variabel pecahkan 1 = bulan
            // variabel pecahkan 2 = tahun
            return $bulan[(int) $inp];
        }
        function tgl_indo($tanggal)
        {
            $bulan = [
                1 => 'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember',
            ];
            $pecahkan = explode('-', $tanggal);
            // variabel pecahkan 0 = tanggal
            // variabel pecahkan 1 = bulan
            // variabel pecahkan 2 = tahun
            return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
        }
        function hari($hari)
        {
            switch ($hari) {
                case 'Sun':
                    $hari_ini = 'Minggu';
                    break;
                case 'Mon':
                    $hari_ini = 'Senin';
                    break;
                case 'Tue':
                    $hari_ini = 'Selasa';
                    break;
                case 'Wed':
                    $hari_ini = 'Rabu';
                    break;
                case 'Thu':
                    $hari_ini = 'Kamis';
                    break;
                case 'Fri':
                    $hari_ini = 'Jumat';
                    break;
                case 'Sat':
                    $hari_ini = 'Sabtu';
                    break;
                default:
                    $hari_ini = 'Tidak di ketahui';
                    break;
            }
            return $hari_ini;
        }
    @endphp
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
                        <table class="divide-y divide-gray-300 border rounded-lg w-full"
                            style="background-color: rgba(64, 94, 79, 1)" id="dataTable">
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
                                        Tanggal
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
                                                {{ $dt->mahasiswa->nama }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $dt->mahasiswa->nim }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $dt->verbal }}, {{ $dt->abstrak }}, {{ $dt->bahasa }},
                                            {{ $dt->skolastik }}, {{ $dt->spasial }}, {{ $dt->numerik }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ tgl_indo($dt->created_at->format('Y-m-d')) }}
                                        </td>
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

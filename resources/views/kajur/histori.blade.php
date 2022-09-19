<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ $title }}</title>
</head>

<body>
    <section id="header">
        @include('partials.headerkajur')
    </section>

    <section id="home">
        <div class="container border-b-4 border-black mx-auto my-8">
            <h2 class="text-center uppercase font-serif text-4xl font-bold text-black">History</h2>
        </div>
    </section>

    <!-- <div class="container flex mx-auto my-4 w-full">
        <a href="" class="rounded-3xl py-1 px-4 hover:text-white text-black font-serif" style="background-color: rgba(213, 221, 209, 1)">
            + Tambah Data
        </a>
    </div> -->
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
    <section id="table">
        <div class="container flex mx-auto mt-5 w-full">
            <div class="w-full rounded-3xl overflow-hidden shadow-lg">
                <div class="text-white" style="background-color: rgba(64, 94, 79, 1)">
                    <h1 class=" py-2 px-4">History</h1>
                </div>
                <div class="w-full">
                    <div class="mx-6 py-2">
                        <table class="divide-y divide-gray-300 w-full" id="dataTable">
                            <thead style="background-color: rgba(64, 94, 79, 1)">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-white">
                                        ID
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Name
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        NIM
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Prodi
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Hasil Bakat
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Waktu Pengujian
                                    </th>

                                </tr>
                            </thead>
                            @foreach ($data as $i => $dt)
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="text-center whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ ++$i }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $dt->mahasiswa->nama }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $dt->mahasiswa->nim }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $dt->mahasiswa->prodi->nama }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $dt->verbal }}, {{ $dt->abstrak }}, {{ $dt->bahasa }},
                                            {{ $dt->skolastik }}, {{ $dt->spasial }}, {{ $dt->numerik }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ hari($dt->created_at->format('D')) }},
                                            {{ tgl_indo($dt->created_at->format('Y-m-d')) }}
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

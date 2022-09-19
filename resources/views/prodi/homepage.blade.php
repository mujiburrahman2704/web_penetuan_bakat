<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- style css --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body class="overflow-auto">
    <section id="header">
        @include('partials.headerkajur')
    </section>
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
    <section>
        <div class="container flex mx-auto ">
            <div class="flex justify-center w-full py-3 border-b-4 border-black">
                <h3 class="text-3xl font-bold text-black">BERANDA ADMIN</h3>
            </div>
        </div>
        <div class="container flex mx-auto mt-8 mb-8">
            <div class=" w-full flex flex-row gap-36 justify-between text-white text-2xl font-serif">
                <div class="shadow-lg rounded-2xl w-1/3 p-7 py-4 relative overflow-hidden"
                    style="background-color: rgba(213, 221, 209, 1)">
                    <div class="w-full flex flex-col space-y-1">
                        <h2 class="border-b-2 font-bold border-black text-black">Mahasiswa</h2>
                        <div class="text-black flex flex-wrap items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                            </svg>
                            <h2>
                                {{ $mhs }}
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="shadow-lg rounded-2xl w-1/3 p-7 py-4 bg-purple-400 relative overflow-hidden "
                    style="background-color: rgba(213, 221, 209, 1)">
                    <div class="w-full flex flex-col space-y-1">
                        <h2 class="border-b-2 font-bold border-black text-black">Jumlah Pengujian</h2>
                        <div class="text-black flex flex-wrap space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            <h2>
                                {{ $count }}
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="shadow-lg rounded-2xl w-1/3 p-7 py-4 bg-purple-400 relative overflow-hidden"
                    style="background-color: rgba(213, 221, 209, 1)">
                    <div class="w-full flex flex-col space-y-1">
                        <?php date_default_timezone_set('Asia/jakarta'); ?>
                        <h3 class="border-b-2 font-bold text-sm border-black text-black">{{ hari(date('D')) }},
                            {{ tgl_indo(date('Y-m-d')) }} </h3>
                        <h2 class="text-black text-sm"><?php echo date('h:i:s A'); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="grafik">
        <div class="my-2 mx-8 font-bold flex justify-center text-2xl">
            <h2 class="border-b-4 w-96 py-2 text-center border-black">Jumlah Bakat Khusus Mahasiswa</h2>
        </div>
        <div class="mx-8 px-8 my-8 py-4 rounded-lg" style="background-color: rgba(213, 221, 209, 1)">
            <div class="space-y-20">
                <div class="container mx-auto mt-20 flex justify-center" data-aos="fade-up">
                    <div class="w-2/3">
                        <canvas id="myChart1"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script>
    var ctx = document.getElementById('myChart1');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Abstrak', 'Bahasa', 'Numerik', 'Skolastik', 'spasial', 'verbal'],
            datasets: [{
                fill: false,
                label: 'TI',
                borderColor: 'rgb(0, 255, 0)',
                backgroundColor: 'rgb(0, 255, 0)',
                hoverOffset: 4,
                data: [
                    1, 2, 3, 4, 5, 6
                ],
            }, {
                fill: false,
                label: 'TRKJ',
                borderColor: 'rgb(0, 200, 255)',
                backgroundColor: 'rgb(0, 200, 255)',
                hoverOffset: 4,
                data: [
                    2, 3, 4, 5, 6, 7
                ],
            }]
        },
    });
</script>
<script>
    AOS.init();
</script>

</html>

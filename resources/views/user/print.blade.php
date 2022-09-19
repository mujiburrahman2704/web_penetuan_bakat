<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .col1 {
            width: 5%;
            text-align: center;
        }

        .paddingcol {
            padding-right: 20px;
            padding-left: 10px;
        }

        .tbody {
            font-size: 18px
        }

        thead {
            font-size: 20px
        }
    </style>
</head>

<body>
    <?php
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
    ?>
    <center>
        <h2 style="    margin-block-end:0em">Hasil Pengujian</h2>
        <h2 style="margin-top:0px">Sistem Klasifikasi Bakat Khusus</h2>
    </center>
    <h3>Data Diri Mahasiswa</h3>
    <hr>
    <table>
        <tr>
            <td width="200px">Nama</td>
            <td>:</td>
            <td>{{ $user->nama }}</td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td>{{ $user->nim }}</td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td>:</td>
            <td>{{ $user->prodi->nama }}</td>
        </tr>
        <tr>
            <td>Tanggal & waktu Pengujian</td>
            <td>:</td>
            <td>{{ tgl_indo($user->created_at->format('Y-m-d')) }} </td>
        </tr>
    </table>


    <h3>Hasil Pengujian</h3>
    <hr>
    <table>
        <tr>
            <td width="200px">Bakat Verbal</td>
            <td>:</td>
            <td>{{ $data->verbal }}</td>
        </tr>
        <tr>
            <td>Bakat Numerikal</td>
            <td>:</td>
            <td>{{ $data->numerik }}</td>
        </tr>
        <tr>
            <td>Bakat Skolastik</td>
            <td>:</td>
            <td>{{ $data->skolastik }}</td>
        </tr>
        <tr>
            <td>Bakat Abstrak</td>
            <td>:</td>
            <td>{{ $data->abstrak }}</td>
        </tr>
        <tr>
            <td>Bakat Spasial</td>
            <td>:</td>
            <td>{{ $data->spasial }}</td>
        </tr>
        <tr>
            <td>Bakat Bahasa</td>
            <td>:</td>
            <td>{{ $data->bahasa }}</td>
        </tr>
    </table>

    <h3>Deskripsi</h3>
    <hr>
    @if (substr(trim($data->verbal), 0, -1) == 'Bakat Verba')
        <b>{{ $deskripsi[0]->nama }}</b>
        <p style="text-align: justify">{{ $deskripsi[0]->deskripsi }}</p>
    @endif

    @if (substr(trim($data->numerik), 0, -1) == 'Bakat Numeri')
        <b>{{ $deskripsi[1]->nama }}</b>
        <p style="text-align: justify">{{ $deskripsi[1]->deskripsi }}</p>
    @endif

    @if (substr(trim($data->skolastik), 0, -1) === 'Bakat Skolasti')
        <b>{{ $deskripsi[2]->nama }}</b>
        <p style="text-align: justify">{{ $deskripsi[2]->deskripsi }}</p>
    @endif

    @if (substr(trim($data->spasial), 0, -1) == 'Bakat Spasia')
        <b>{{ $deskripsi[3]->nama }}</b>
        <p style="text-align: justify">{{ $deskripsi[3]->deskripsi }}</p>
    @endif

    @if (substr(trim($data->bahasa), 0, -1) == 'Bakat Bahas')
        <b>{{ $deskripsi[4]->nama }}</b>
        <p style="text-align: justify">{{ $deskripsi[4]->deskripsi }}</p>
    @endif

    @if (substr(trim($data->abstrak), 0, -1) === 'Bakat Abstra')
        <b>{{ $deskripsi[5]->nama }}</b>
        <p style="text-align: justify">{{ $deskripsi[5]->deskripsi }}</p>
    @endif
</body>

</html>

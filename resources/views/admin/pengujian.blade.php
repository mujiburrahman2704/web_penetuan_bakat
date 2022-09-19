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
        <div class="container border-b-4 border-black mx-auto my-6">
            <h2 class="text-center uppercase font-serif text-4xl text-black font-bold">Data Pengujian</h2>
        </div>
    </section>

    <section id="table">
        <div class="flex mx-auto mt-5 w-full">
            <div class="w-full rounded-3xl overflow-hidden shadow-lg">
                <div class="text-white" style="background-color: rgba(64, 94, 79, 1)">
                    <h1 class="py-2 px-4">Soal Bakat Verbal</h1>
                </div>
                <div class="w-full overflow-auto">
                    <div class="mx-10 py-2">
                        <table class="divide-y divide-gray-300 w-full" id="dataTable">
                            <thead style="background-color: rgba(64, 94, 79, 1)">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-white">
                                        ID
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Tipe
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        A
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        B
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        C
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        D
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($verbal as $i => $dt)
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="text-center whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ ++$i }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->tipe }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-left text-gray-900">
                                                {{ $dt->soal }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->a }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->b }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->c }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->d }}
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex mx-auto mt-10 w-full">
            <div class="w-full rounded-3xl overflow-hidden shadow-lg">
                <div class="text-white" style="background-color: rgba(64, 94, 79, 1)">
                    <h1 class="py-2 px-4">Soal Bakat Bahasa</h1>
                </div>
                <div class="w-full overflow-auto">
                    <div class="mx-10 py-2">
                        <table class="divide-y divide-gray-300 w-full" id="dataTable">
                            <thead style="background-color: rgba(64, 94, 79, 1)">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-white">
                                        ID
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Tipe
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        A
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        B
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        C
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        D
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($bahasa as $i => $dt)
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="text-center whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ ++$i }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->tipe }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-left text-gray-900">
                                                {{ $dt->soal }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->a }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->b }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->c }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->d }}
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex mx-auto mt-10 w-full">
            <div class="w-full rounded-3xl overflow-hidden shadow-lg">
                <div class="text-white" style="background-color: rgba(64, 94, 79, 1)">
                    <h1 class="py-2 px-4">Soal Bakat Numerik</h1>
                </div>
                <div class="w-full overflow-auto">
                    <div class="mx-10 py-2">
                        <table class="divide-y divide-gray-300 w-full" id="dataTable">
                            <thead style="background-color: rgba(64, 94, 79, 1)">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-white">
                                        ID
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Tipe
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        A
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        B
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        C
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        D
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($numerik as $i => $dt)
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="text-center whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ ++$i }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->tipe }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-left text-gray-900">
                                                {{ $dt->soal }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->a }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->b }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->c }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->d }}
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex mx-auto mt-10 w-full">
            <div class="w-full rounded-3xl overflow-hidden shadow-lg">
                <div class="text-white" style="background-color: rgba(64, 94, 79, 1)">
                    <h1 class="py-2 px-4">Soal Bakat skolastik</h1>
                </div>
                <div class="w-full overflow-auto">
                    <div class="mx-10 py-2">
                        <table class="divide-y divide-gray-300 w-full" id="dataTable">
                            <thead style="background-color: rgba(64, 94, 79, 1)">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-white">
                                        ID
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Tipe
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        A
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        B
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        C
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        D
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($skolastik as $i => $dt)
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="text-center whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ ++$i }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->tipe }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-left text-gray-900">
                                                {{ $dt->soal }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->a }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->b }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->c }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->d }}
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- Abstrak --}}
        <div class="flex mx-auto mt-10 w-full">
            <div class="w-full rounded-3xl overflow-hidden shadow-lg">
                <div class="text-white" style="background-color: rgba(64, 94, 79, 1)">
                    <h1 class="py-2 px-4">Soal Bakat Abstrak</h1>
                </div>
                <div class="w-full overflow-auto">
                    <div class="mx-10 py-2">
                        <table class="divide-y divide-gray-300 w-full" id="dataTable">
                            <thead style="background-color: rgba(64, 94, 79, 1)">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-white">
                                        ID
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Tipe
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        A
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        B
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        C
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        D
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($abstrak as $i => $dt)
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="text-center whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ ++$i }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->tipe }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-left text-gray-900">
                                                {{ $dt->soal }}
                                                <?php
                                                if($dt->gambar != '-'){
                                                ?>
                                                <img src="{{ asset('img/' . $dt->gambar) }}" width="280"
                                                    height="280">;
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                <?php
                                                if($dt->gambara != '-'){
                                                ?>
                                                <img src="{{ asset('img/' . $dt->gambara) }}" width="100"
                                                    height="100">;
                                                <?php
                                                }else{
                                                    ?>
                                                {{ $dt->a }}
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                <?php
                                                if($dt->gambarb != '-'){
                                                ?>
                                                <img src="{{ asset('img/' . $dt->gambarb) }}" width="100"
                                                    height="100">;
                                                <?php
                                                }else{
                                                    ?>
                                                {{ $dt->b }}
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                <?php
                                                if($dt->gambarc != '-'){
                                                ?>
                                                <img src="{{ asset('img/' . $dt->gambarc) }}" width="100"
                                                    height="100">;
                                                <?php
                                                }else{
                                                    ?>
                                                {{ $dt->c }}
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                <?php
                                                if($dt->gambard != '-'){
                                                ?>
                                                <img src="{{ asset('img/' . $dt->gambard) }}" width="100"
                                                    height="100">;
                                                <?php
                                                }else{
                                                    ?>
                                                {{ $dt->d }}
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex mx-auto mt-10 w-full">
            <div class="w-full rounded-3xl overflow-hidden shadow-lg">
                <div class="text-white" style="background-color: rgba(64, 94, 79, 1)">
                    <h1 class="py-2 px-4">Soal Bakat Spasial</h1>
                </div>
                <div class="w-full overflow-auto">
                    <div class="mx-10 py-2">
                        <table class="divide-y divide-gray-300 w-full" id="dataTable">
                            <thead style="background-color: rgba(64, 94, 79, 1)">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-white">
                                        ID
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Tipe
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        A
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        B
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        C
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        D
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($spasial as $i => $dt)
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="text-center whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ ++$i }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->tipe }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-left text-gray-900">
                                                {{ $dt->soal }}
                                                <?php
                                                if($dt->gambar != '-'){
                                                ?>
                                                <img src="{{ asset('img/' . $dt->gambar) }}" width="280"
                                                    height="280">;
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                <?php
                                                if($dt->gambara != '-'){
                                                ?>
                                                <img src="{{ asset('img/' . $dt->gambara) }}" width="100"
                                                    height="100">;
                                                <?php
                                                }else{
                                                    ?>
                                                {{ $dt->a }}
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                <?php
                                                if($dt->gambarb != '-'){
                                                ?>
                                                <img src="{{ asset('img/' . $dt->gambarb) }}" width="100"
                                                    height="100">;
                                                <?php
                                                }else{
                                                    ?>
                                                {{ $dt->b }}
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                <?php
                                                if($dt->gambarc != '-'){
                                                ?>
                                                <img src="{{ asset('img/' . $dt->gambarc) }}" width="100"
                                                    height="100">;
                                                <?php
                                                }else{
                                                    ?>
                                                {{ $dt->c }}
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                <?php
                                                if($dt->gambard != '-'){
                                                ?>
                                                <img src="{{ asset('img/' . $dt->gambard) }}" width="100"
                                                    height="100">;
                                                <?php
                                                }else{
                                                    ?>
                                                {{ $dt->d }}
                                                <?php
                                                }
                                                ?>
                                            </div>
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

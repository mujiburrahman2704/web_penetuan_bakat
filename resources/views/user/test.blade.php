<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <section id="header">
        @include('partials.headeruser')
    </section>

    <section id="home">
        <div class="container border-b-2 mx-auto my-8 border-black">
            <h2 class="text-center uppercase font-serif text-4xl font-bold text-black">Form Pengujian</h2>
        </div>
        <div class="container my-8 mx-auto">
            <div class="border shadow-purple-200 rounded-lg shadow-lg">

                <form action="{{ route('hitung', $id + 1) }}" method="POST">
                    @csrf
                    @foreach ($soal as $i => $s)
                        <div class="px-4 py-2">
                            <h2 class="font-serif">
                                {{ ++$i }}
                                {{ $s->soal }}
                                <?php
                                if($s->gambar != '-'){
                                ?>
                                <img src="{{ asset('img/' . $s->gambar) }}" width="280" height="280">
                                <?php
                                }
                                ?>
                            </h2>
                            <input type="hidden" name="id" id="id" value="{{ $s->id }}">
                            <input type="hidden" name="jumlah" id="jumlah" value="{{ $jumlah }}">
                            <input type="hidden" name="tipe" id="tipe" value="{{ $s->tipe }}">
                        </div>
                        <div class="mx-8 space-y-4 py-4">
                            <div class="form-check space-x-2">A
                                <input type="radio" name="pilihan[{{ $s->id }}]" id="{{ $s->id }}"
                                    value="{{ $s->a }}">
                                <?php
                                if($s->gambara != '-'){
                                ?>
                                <img src="{{ asset('img/' . $s->gambara) }}" width="100" height="100">
                                <?php
                                }else{
                                    ?>
                                {{ $s->a }}
                                <?php
                                }
                                ?>
                            </div>
                            <div class="form-check space-x-2">B
                                <input type="radio" name="pilihan[{{ $s->id }}]" id="{{ $s->id }}"
                                    value="{{ $s->b }}">
                                <?php
                                if($s->gambarb != '-'){
                                ?>
                                <img src="{{ asset('img/' . $s->gambarb) }}" width="100" height="100">
                                <?php
                                }else{
                                    ?>
                                {{ $s->b }}
                                <?php
                                }
                                ?>
                            </div>
                            {{-- @php
                                dd($s->tipe);
                            @endphp --}}
                            @if ($s->tipe != 'bahasa')
                                <div class="form-check space-x-2">C
                                    <input type="radio" name="pilihan[{{ $s->id }}]" id="{{ $s->id }}"
                                        value="{{ $s->c }}">
                                    <?php
                                    if($s->gambarc != '-'){
                                    ?>
                                    <img src="{{ asset('img/' . $s->gambarc) }}" width="100" height="100">
                                    <?php
                                    }else{
                                        ?>
                                    {{ $s->c }}
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="form-check space-x-2">D
                                    <input type="radio" name="pilihan[{{ $s->id }}]" id="{{ $s->id }}"
                                        value="{{ $s->d }}">
                                    <?php
                                    if($s->gambard != '-'){
                                    ?>
                                    <img src="{{ asset('img/' . $s->gambard) }}" width="100" height="100">
                                    <?php
                                    }else{
                                        ?>
                                    {{ $s->d }}
                                    <?php
                                    }
                                    ?>
                                </div>
                            @endif
                        </div>
                    @endforeach
                    <div class="my-4 mx-4 flex justify-end">
                        <?php
                        if ($tipe != "abstrak"){
                            ?>
                        <button type="submit" class="rounded-lg py-1 px-6 text-white"
                            style="background-color: rgba(64, 93, 79, 1)">Next</button>
                        <?php
                        }else{
                            ?>
                        <button type="submit" class="rounded-lg py-1 px-6 text-white"
                            style="background-color: rgba(64, 93, 79, 1)">selesai</button>
                        <?php
                        }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>

</html>

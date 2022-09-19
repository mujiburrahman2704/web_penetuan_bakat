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
        <div class="h-56 flex items-center justify-center">
            <div class="py-4 text-center">
                <p class="uppercase font-bold text-4xl my-4">klik untuk memulai test</p>
                <a href="{{ route('mulai', 1) }}" class="rounded-lg shadow-xl py-2 px-6 text-white hover:text-black"
                    style="background-color: rgba(64, 94, 79, 1)">
                    Mulai Test
                </a>
            </div>
        </div>
    </section>

</body>

</html>

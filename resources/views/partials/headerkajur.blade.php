<div class="py-1 flex justify-end" style="background-color: rgba(64, 94, 79, 1)">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <div class="flex flex-row gap-2 items-center">
            <a href="{{ route('datakajur') }}" class="items-center text-lg flex flex-row text-white font-bold"><svg xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                {{ $user->nama }}
            </a>
            <button type="submit" class="text-white px-3 font-bold hover:text-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </button>
        </div>
    </form>
</div>
<div>
    <div class="flex flex-row justify-center space-x-4 py-2" style="background-color: rgba(213, 221, 209, 1)">
        <div class="py-6">
            <h2 class="flex justify-center font-bold text-4xl text-black">Sistem Klasifikasi Bakat Khusus Mahasiswa
                Jurusan TIK</h2>
            <h2 class="flex justify-center text-2xl font-mono font-semibold text-black">Menggunakan Metode Naive Bayes
                Classifier</h2>
        </div>
    </div>
</div>
<div class="">
    <nav class="relative w-full flex flex-wrap items-center justify-between shadow-lg navbar-dark"
        style="background-color: rgba(125, 159, 128, 1)">
        <div class="navbar-collapse flex-grow items-cente px-12">
            <ul class="navbar-nav flex flex-row pl-0 list style-none mr-auto justify-center text-lg text-white">
                <li class="nav-item py-2 hover:text-black px-12" style="background-color: rgba(64, 94, 79, 1)">
                    <a href="{{ route('kajurhome') }}">Beranda</a>
                </li>
                <li class="nav-item py-2 px-8 hover:text-black" style="background-color: rgba(64, 94, 79, 1)">
                    <a href="{{ route('kajurmhs') }}">Data Mahasiswa</a>
                </li>
                <li class="nav-item py-2 px-6 hover:text-black" style="background-color: rgba(64, 94, 79, 1)">
                    <a href="{{ route('kajurhistori') }}">History</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

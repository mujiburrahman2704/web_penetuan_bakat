<div class="py-1 flex justify-end" style="background-color: rgba(64, 94, 79, 1)">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="text-white px-3 font-bold hover:text-black">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
              </svg>
        </button>
    </form>
</div>
    <div>
        <div class="flex flex-row justify-center space-x-4 py-2" style="background-color: rgba(213, 221, 209, 1)">
            <div class="py-6">
                <h2 class="flex justify-center font-bold text-4xl text-black">Sistem Klasifikasi Bakat Khusus Mahasiswa Jurusan TIK</h2>
                <h2 class="flex justify-center text-2xl font-mono font-semibold text-black">Menggunakan Metode Naive Bayes Classifier</h2>
            </div>
        </div>
    </div>
    <div class="">
        <nav class="relative w-full flex flex-wrap items-center justify-between shadow-lg navbar-dark" style="background-color: rgba(125, 159, 128, 1)">
            <div class="navbar-collapse flex-grow items-cente px-12">
                <ul class="navbar-nav flex flex-row pl-0 list style-none mr-auto justify-center text-lg text-white">
                    <li class="nav-item py-2 hover:text-black px-12" style="background-color: rgba(64, 94, 79, 1)">
                        <a href="{{ route('homepage') }}">Beranda</a>
                    </li>
                    <li class="nav-item py-2 hover:text-black px-12" style="background-color: rgba(64, 94, 79, 1)">
                        <a href="{{ route('pengujian') }}">Pengujian</a>
                    </li>
                    <li class="nav-item py-2 px-8 hover:text-black" style="background-color: rgba(64, 94, 79, 1)">
                        <a href="{{ url('admin/datastudent') }}">Data Mahasiswa</a>
                    </li>
                    <li class="nav-item py-2 px-6 hover:text-black" style="background-color: rgba(64, 94, 79, 1)">
                        <a href="{{ route('historis') }}">History</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

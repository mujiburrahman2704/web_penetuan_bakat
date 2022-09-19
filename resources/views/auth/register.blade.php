<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo/>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="flex flex-row">
                <div class="grid grid-cols-2 gap-2 w-full">
                    <!-- Name -->
                    <div class="mt-4">
                        <x-label for="nama" :value="__('Name')" />

                        <x-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')"
                            required autofocus />
                    </div>
                    {{-- NIM --}}
                    <div class="mt-4">
                        <x-label for="nim" :value="__('Nim')" />

                        <x-input id="nim" class="block mt-1 w-full col-start-1" type="number" name="nim"
                            :value="old('nim')" required autofocus />
                    </div>
                </div>
            </div>

            <div class="flex flex-row">
                <div class="grid grid-cols-2 gap-2 w-full">
                    {{-- Nohp --}}
                    <div class="mt-4">
                        <x-label for="nohp" :value="__('No Hp')" />

                        <x-input id="nohp" class="block mt-1 w-full col-start-2" type="tel" name="nohp"
                            :value="old('nohp')" required autofocus />
                    </div>
                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required />
                    </div>

                </div>
            </div>

            <div class="flex flex-row">
                <div class="grid grid-cols-2 gap-2 w-full">
                    {{-- Prodi --}}
                    <div class="mt-4">
                        <x-label for="prodi_id" :value="__('Prodi')" />

                        <select name="prodi_id"
                            class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full rounded-md"
                            id="prodi_id" required autofocus>
                            @foreach ($prodi as $p)
                                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- Jurusan --}}
                    <div class="mt-4">
                        <x-label for="jurusan_id" :value="__('Jurusan')" />
                        <select name="jurusan_id"
                            class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full rounded-md"
                            id="jurusan_id" required autofocus>
                            @foreach ($jurusan as $j)
                                <option value="{{ $j->id }}">{{ $j->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>


            {{-- Alamat --}}
            <div class="mt-4">
                <x-label for="alamat" :value="__('Alamat')" />

                <x-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')"
                    required autofocus />
            </div>




            <div class="flex flex-row">
                <div class="grid grid-cols-2 gap-2 w-full">
                    {{-- Tanggal Lahir --}}
                    <div class="mt-4">
                        <x-label for="tgllahir" :value="__('tanggal lahir')" />

                        <x-input id="tgllahir" class="block mt-1 w-full" type="date" name="tgllahir"
                            :value="old('tgllahir')" required />
                    </div>
                    {{-- jenis kelamin --}}
                    <div class="mt-4">
                        <x-label for="jeniskelamin" :value="__('Jenis Kelamin')" />

                        <select name="jeniskelamin" id="jeniskelamin"
                            class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            :value="old('jeniskelamin')" required>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="flex flex-row">
                <div class="grid grid-cols-2 gap-2 w-full">
                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required />
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

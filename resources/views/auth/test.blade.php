<x-guest-layout>
    <x-auth-card>
        
            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <title>Document</title>
    </head>
    <body>
        <section id="kata">
          <div class="border-black mx-96 border-b-2">
            <h1 class="text-center pt-11 text-2xl uppercase font-bold">Sistem Penentuan Bakat Mahasiswa TIK</h1>
            <h4 class="text-center uppercase">Menggunakan Metode Naive Bayes</h4>
          </div>  
        </section>

        <section id="dekstop">
            <div class="container-fluid mx-auto">
                <div class="flex flex-wrap">
                    <div class="w-full max-h-screen self-center lg:justify-end lg:w-1/2 pl-16">
                        <div class="max-w-md rounded-lg border lg:ml-24 shadow-lg overflow-hidden">
                            <div class="px-6 py-4">
                                <div class="font-bold text-lg">
                                    Login
                                </div>
                            </div>
                      <form method="POST" action="{{ route('login') }}">
                        @csrf
                      <div class="space-y-2">
                        <ul class="list-disc space-y-2">
                          <li class="px-6 space-x-3">
                            <input class="
                            py-1.5 
                            w-full 
                            shadow-lg 
                            form-control 
                            block px-3 
                            text-base 
                            font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="text" placeholder="Username">
                          </li>
                          <li class="px-6 space-x-3">
                            <input class="
                            py-1.5 
                            w-full 
                            shadow-lg 
                            form-control 
                            block px-3 
                            text-base 
                            font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
                            type="number" placeholder="Password">
                          </li>

                        </ul>
                        <div class="py-2 flex justify-end mr-6">
                          <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Register</button>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="w-full justify-center px-32 py-20 relative lg:w-1/2">  
                  <img src="{{ asset('img/login.png') }}" style="width: 30rem" alt="Webbench">
                  <span class="top-0 absolute">
                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                      <path fill="#2563EB" d="M29,-40.6C42.7,-42.3,62.3,-44.8,70.3,-38.2C78.2,-31.6,74.4,-15.8,68.3,-3.6C62.1,8.7,53.6,17.4,46.7,25.8C39.8,34.2,34.5,42.4,27,52.5C19.5,62.7,9.7,74.8,-2,78.3C-13.8,81.9,-27.6,76.8,-32.5,65.1C-37.4,53.5,-33.4,35.2,-35.2,23.2C-37,11.3,-44.7,5.6,-45.9,-0.7C-47,-6.9,-41.5,-13.9,-39.2,-25.1C-37,-36.2,-37.8,-51.6,-31.8,-54.3C-25.8,-57.1,-12.9,-47.1,-2.6,-42.6C7.7,-38.1,15.3,-38.9,29,-40.6Z" transform="translate(100 100) scale(1.2)"/>
                    </svg>
                  </span>
                </div>
              </div>  
            </div>
          </section>
    </body>
</html>
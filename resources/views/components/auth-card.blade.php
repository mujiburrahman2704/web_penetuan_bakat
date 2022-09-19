<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div class="flex flex-row w-full justify-center py-8">
        <div class="">
            {{ $logo }}
        </div>
    
        <div class="w-full sm:max-w-lg px-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</div>

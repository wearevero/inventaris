<div class="min-h-screen flex flex-col sm:justify-center items-center sm:pt-0 bg-black dark:bg-gray-900">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md my-6 px-6 py-4 bg-black/50 backdrop-blur-md border border-oranged dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>

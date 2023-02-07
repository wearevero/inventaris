<x-app-layout>
    <div class="my-20">
        <h1 class="text-center font-display text-oranged text-4xl">
            List of kategori monitor
        </h1>
        <ul class="text-white mt-10">
        @foreach($monitors as $monitor)
                <li class="px-10 text-2xl font-basement">
                    {{ $monitor->id }} &bull; {{ $monitor->nama_user }} &bull; {{ $monitor->bagian->nama_bagian }} &bull; {{ $monitor->posisi }} &bull; {{ $monitor->merk }} &bull; {{ $monitor->kode }}
                </li>
        @endforeach
        </ul>
    </div>
</x-app-layout>
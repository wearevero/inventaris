<x-app-layout>
    <div class="my-20">
        <h1 class="text-center font-display text-oranged text-4xl">
            List of kategori Notebook
        </h1>
        <ul class="text-white mt-10">
        @foreach($notebooks as $notebook)
                <li class="px-10 text-2xl font-basement">
                    {{ $notebook->id }} &bull; {{ $notebook->nama_user }} &bull; {{ $notebook->bagian->nama_bagian }} &bull; {{ $notebook->posisi }} &bull; {{ $notebook->merk }} &bull; {{ $notebook->kode }}
                </li>
        @endforeach
        </ul>
    </div>
</x-app-layout>
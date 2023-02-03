<x-app-layout title="Kategori {{ $data->inventaris->nama_user }}">
    <div class="px-20 my-20 mx-auto uppercase justify-center items-center">
        <h1 class="text-white font-display text-2xl text-center tracking-wider">List of Kategori : <span class="text-oranged">{{ $data->inventaris->nama_user }}</span></h1>
        <div class="text my-10 pl-10 font-basement text-white tracking-wider">
            <ul class="text-xl">
                <li>Id: <span class="text-oranged">{{ $data->inventaris->nama_user }}</span></li>
                <li>Nama: <span class="text-oranged">{{ $data->inventaris->id_bagian }}</span></li>
                <li>Kode: <span class="text-oranged">{{ $data->inventaris->posisi }}</span></li>
            </ul>
        </div>
        
        <!-- Tombol Tambah -->
        <div class="mx-auto text-center">
            <!-- Search Function -->
            <button class="px-4 uppercase rounded-lg font-space hover:bg-oranged hover:text-white border-4 border-oranged bg-white font-bold shadow-[6px_6px_0_0] shadow-oranged text-xl transition hover:shadow-none focus:outline-none focus:ring active:bg-oranged">
                <a href="{{ route('kategori.index') }}">
                    Back
                </a>
            </button>
        </div>
        <!-- end -->
    </div>
</x-app-layout>
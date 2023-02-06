<x-app-layout title="Detail {{ $data->nama_user }}">
    <div class="px-20 my-20 mx-auto uppercase justify-center items-center">
        <h1 class="text-white font-display text-2xl text-center tracking-wider">THE DETAIL OF : <span class="text-oranged">{{ $data->nama_user }}</span> </h1>
        <div class="text my-10 pl-10 font-basement text-white tracking-wider">
            <ul class="text-xl">
                <li>Nama: <span class="text-oranged">{{ $data->nama_user }}</span></li>
                <li>Bagian: <span class="text-oranged">{{ $data->bagian->nama }}</span></li>
                <li>Kode: <span class="text-oranged">{{ $data->kode }}</span></li>
                <li>Th. Pembelian: <span class="text-oranged">{{ $data->th_pembelian }}</span></li>
                <li>CPU: <span class="text-oranged">{{ $data->cpu }}</span></li>
                <li>Memory: <span class="text-oranged">{{ $data->memory }}</span></li>
                <li>Merk: <span class="text-oranged">{{ $data->merk }}</span></li>
                <li>Size Monitor: <span class="text-oranged">{{ $data->size_monitor }}</span></li>
                <li>Kategori: <span class="text-oranged">{{ $data->kategori->nama }}</span></li>
                <li>Keterangan: <span class="text-oranged">{{ $data->keterangan }}</span></li>
                <li>Current location: <span class="text-oranged">{{ $data->bagian->nama }}</span></li>
                <li>Current status: 
                    <span class="text-oranged">
                     @if($data->status == 1)
                        Aktif
                    @elseif($data->status == 0)
                        Tidak Aktif
                    @endif
                    </span>
                </li>
                <li>last updated: <span class="text-oranged">{{ $data->updated_at }} wib</span></li>
            </ul>
        </div>
        
        <!-- Tombol Tambah -->
        <div class="px-10">
            <!-- Search Function -->
            <button class="px-4 uppercase rounded-lg font-space hover:bg-oranged hover:text-white border-4 border-oranged bg-white font-bold shadow-[6px_6px_0_0] shadow-oranged text-xl transition hover:shadow-none focus:outline-none focus:ring active:bg-oranged">
                <a href="{{ route('inventaris.index') }}">
                    Back
                </a>
            </button>
        </div>
        <!-- end -->
    </div>
</x-app-layout>
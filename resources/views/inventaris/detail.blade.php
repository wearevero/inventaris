<x-app-layout title="Detail of {{ $data->nama_user }}">
    <div class="px-20 my-20 mx-auto uppercase justify-center items-center">
        <h1 class="text-geistWhite font-display text-2xl text-center tracking-wide">THE DETAIL OF : <span
                class="text-geistWhite tracking-widest">{{ $data->nama_user }}</span> </h1>
        <div class="my-10 pl-10 font-montreal text-geistWhite tracking-wider">
            <ul class="text-xl space-y-1 text-geistWhite">
                <li class="mb-5 flex space-x-7 font-montreal fill-geistWhite text-geistWhite">
                    <span class="fill-geistWhite border border-geistWhite bg-geistWhite p-3 rounded-lg">{!! DNS1D::getBarcodeHTML($data->kode, 'C128') !!}</span>
                    <button class="bg-slate-500/10 text-geistWhite rounded-lg px-3 border border-geistWhite">
                        <a href="{{ route('cetak.barcode', $data->id) }}" target="_blank">
                            Print Barcode
                        </a>
                    </button>
                    <span class="bg-transparent text-geistCyanLight border-2 p-2 flex items-center justify-center text-sm border-geistCyanLight rounded-full">
                        it's new, lets try it!
                    </span>
                </li>
                <li>Nama : <span class="text-geistWhite ml-1">{{ $data->nama_user }}</span></li>
                <li>Bagian : <span class="text-white ml-1">{{ $data->bagian->nama }}</span></li>
                <li>Kode : <span class="text-white ml-1">{{ $data->kode }}</span></li>
                <li>Th. Pembelian : <span class="text-white ml-1">{{ $data->th_pembelian }}</span></li>
                <li>CPU : <span class="text-white ml-1">{{ $data->spec }}</span></li>
                <li>Memory : <span class="text-white ml-1">{{ $data->memory }}</span></li>
                <li>Merk : <span class="text-white ml-1">{{ $data->merk }}</span></li>
                <li>Size Monitor : <span class="text-white ml-1">{{ $data->size_monitor }}</span></li>
                <li>Kategori : <span class="text-white ml-1">{{ $data->kategori->nama }}</span></li>
                <li>Keterangan :
                    @if ($data->keterangan == null)
                        <span class="text-white ml-1">Barang ini tidak memiliki Keterangan apapun</span>
                    @elseif($data->keterangan != null)
                        <span class="text-white ml-1">{{ $data->keterangan }}</span>
                    @endif
                </li>
                <li>Current location : <span class="text-white ml-1">{{ $data->bagian->nama }}</span></li>
                <li>Current status :
                    <span class="text-white ml-1">
                        {{ $data->status->nama_status }}
                    </span>
                </li>
                <li>Last updated : <span class="text-white ml-1">{{ $data->updated_at }} wib</span></li>
            </ul>
        </div>

        <div class="px-10">
            <button
                class="px-4 py-2 uppercase rounded-lg font-space hover:bg-transparent text-white border-4 border-geistWhite bg-geistForeground font-bold shadow-[6px_6px_0_0] shadow-geistWhite text-xl transition hover:shadow-none focus:outline-none focus:ring active:bg-geistWhite">
                <a href="{{ str_replace(url('/'), '', url()->previous()) }}">
                    ← Back
                </a>
            </button>
        </div>
    </div>
</x-app-layout>

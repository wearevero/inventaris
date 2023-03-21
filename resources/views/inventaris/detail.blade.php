<x-app-layout title="Detail of {{ $data->nama_user }}">
    <div class="px-20 my-20 mx-auto uppercase justify-center items-center">
        <h1 class="text-gray-700 font-display text-2xl text-center tracking-wide">THE DETAIL OF : <span
                class="text-black tracking-widest">{{ $data->nama_user }}</span> </h1>
        <div class="my-10 pl-10 font-montreal text-black tracking-wider">
            <ul class="text-xl space-y-1 text-gray-700">
                <li class="mb-5 flex space-x-7 font-montreal">
                    {!! DNS1D::getBarcodeHTML($data->kode, 'UPCA') !!}
                    <button class="bg-slate-500/10 text-slate-800 rounded-lg px-2 border-slate-800 hover:text-slate-500">
                        <a href="{{ route('cetak.barcode', $data->id) }}">
                            Cetak Barcode
                        </a>
                    </button>
                </li>
                <li>Nama : <span class="text-black ml-1">{{ $data->nama_user }}</span></li>
                <li>Bagian : <span class="text-black ml-1">{{ $data->bagian->nama }}</span></li>
                <li>Kode : <span class="text-black ml-1">{{ $data->kode }}</span></li>
                <li>Th. Pembelian : <span class="text-black ml-1">{{ $data->th_pembelian }}</span></li>
                <li>CPU : <span class="text-black ml-1">{{ $data->spec }}</span></li>
                <li>Memory : <span class="text-black ml-1">{{ $data->memory }}</span></li>
                <li>Merk : <span class="text-black ml-1">{{ $data->merk }}</span></li>
                <li>Size Monitor : <span class="text-black ml-1">{{ $data->size_monitor }}</span></li>
                <li>Kategori : <span class="text-black ml-1">{{ $data->kategori->nama }}</span></li>
                <li>Keterangan :
                    @if ($data->keterangan == null)
                        <span class="text-black ml-1">Barang ini tidak memiliki Keterangan apapun</span>
                    @elseif($data->keterangan != null)
                        <span class="text-black ml-1">{{ $data->keterangan }}</span>
                    @endif
                </li>
                <li>Current location : <span class="text-black ml-1">{{ $data->bagian->nama }}</span></li>
                <li>Current status :
                    <span class="text-black ml-1">
                        {{ $data->status->nama_status }}
                    </span>
                </li>
                <li>Last updated : <span class="text-black ml-1">{{ $data->updated_at }} wib</span></li>
            </ul>
        </div>

        <div class="px-10">
            <button
                class="px-4 py-2 uppercase rounded-lg font-space hover:bg-vero hover:text-white border-4 border-vero bg-white font-bold shadow-[6px_6px_0_0] shadow-vero text-xl transition hover:shadow-none focus:outline-none focus:ring active:bg-vero">
                <a href="{{ route('inventaris.index') }}">
                    ← Back
                </a>
            </button>
        </div>
    </div>

    <script>
        $('.print').click(function() {
            window.print();
        });
    </script>
</x-app-layout>

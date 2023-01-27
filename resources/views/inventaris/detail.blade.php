<x-app-layout title="Detail {{ $data->nama_user }}">
    <div class="px-20 my-10 mx-auto justify-center items-center">
        <!-- Tombol Tambah -->
        <div class="mx-auto text-center">
            <!-- Search Function -->
            <button class="bg-white text-black rounded-lg p-3 hover:bg-gray-500 hover:text-white">
                <a href="{{ route('inventaris.index') }}">
                    Kembali
                </a>
            </button>
        </div>
        <!-- end -->

    <table class="border-separate mx-auto rounded-lg border-spacing-4 table-auto my-10 border border-slate-500 border-collapse">
        <thead class="">
            <tr class="text-2xl font-mono">
                <th class="">ID</th>
                <th class="">Nama User</th>
                <th class="">Nama Bagian</th>
                <th class="">Tahun Pembelian</th>
                <th class="">Memory</th>
                <th class="">CPU</th>
                <th class="">Kode</th>
                <th class="">Merk</th>
                <th class="">Keterangan</th>
                <th class="">Waktu input</th>
                <th class="">Waktu update</th>
                <th class="">DxDiag</th>
                <th class="">Kategori</th>
            </tr>
        </thead>
        <tbody class="">
            <tr class="items-center text-center">
                <td class="">{{ $data->id }}</td>
                <td class="">{{ $data->nama_user }}</td>
                <td class="">{{ $data->nama_bagian }}</td>
                <td class="">{{ $data->th_pembelian }}</td>
                <td class="">{{ $data->memory }}</td>
                <td class="">{{ $data->cpu }}</td>
                <td class="">{{ $data->kode }}</td>
                <td class="">{{ $data->merk }}</td>
                <td class="">{{ $data->keterangan }}</td>
                <td class="">{{ $data->created_at }}</td>
                <td class="">{{ $data->updated_at }}</td>
            </tr>
        </tbody>
    </table>    
        </div> 
    </div>
</x-app-layout>
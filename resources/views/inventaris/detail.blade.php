<x-app-layout>
    <div class="px-20 my-10">

    <!-- Tombol Tambah -->
    <div class="mx-auto flex justify-between">
        <button class="bg-slate-200 text-black rounded-full p-3">
            <a href={{ route('inventaris.index') }}>
                Kembali
            </a>
        </button>
    </div>
    <!-- end -->

    <div class="">
        <table class="mx-auto text-center space-x-8 border-separate w-100 rounded-lg border-spacing-4 table-auto my-10 border border-slate-500 border-collapse">
            <thead class="space-x-8">
                <tr class="text-xl font-extrabold border-slate-500">
                    <th class="border-b-2 border-solid border-sky-700">ID</th>
                    <th class="border-b-2 border-solid border-sky-700">Nama User</th>
                    <th class="border-b-2 border-solid border-sky-700">Bagian</th>
                    <th class="border-b-2 border-solid border-sky-700">Tahun Pembelian</th>
                    <th class="border-b-2 border-solid border-sky-700">RAM</th>
                    <th class="border-b-2 border-solid border-sky-700">CPU</th>
                    <th class="border-b-2 border-solid border-sky-700">Kode</th>
                    <th class="border-b-2 border-solid border-sky-700">Merk</th>
                    <th class="border-b-2 border-solid border-sky-700">Waktu Input</th>
                    <th class="border-b-2 border-solid border-sky-700">DxDiag</th>
                </tr>
            </thead>
            <tbody class="border-t border-t-red-500">
                <tr class="items-center text-center">
                <td class="">{{ $data->id }}</td>
                    <td class="">{{ $data->nama_user }}</td>
                    <td class="">{{ $data->nama_bagian }}</td>
                    <td class="">{{ $data->th_pembelian }}</td>
                    <td class="">{{ $data->ram }}</td>
                    <td class="">{{ $data->cpu }}</td>
                    <td class="">{{ $data->kode }}</td>
                    <td class="">{{ $data->merk }}</td>
                    <td class="">{{ $data->created_at }}</td>
                </tr>
            </tbody>
        </table>   
        </div> 
    </div>
</x-app-layout>
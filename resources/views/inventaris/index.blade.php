<x-app-layout>
    <div class="px-20 my-10">

    <!-- Tombol Tambah -->
    <div class="mx-auto flex justify-between">
        <button class="bg-slate-200 text-black rounded p-3">
            <a href={{ route('inventaris.tambah') }}>
                Tambah
            </a>
        </button>

        <!-- Search Function -->
            <input type="text" class="p-2 rounded bg-transparent">
            <button class="bg-green-400 text-black rounded p-3">Cari Data</button>
      
    </div>
    <!-- end -->

    <table class="border-separate rounded-lg border-spacing-4 table-auto my-10 border border-slate-500 border-collapse">
        <thead class="">
            <tr class="border border-slate-500">
                <th class="">ID</th>
                <th class="">Nama User</th>
                <th class="">Nama Bagian</th>
                <th class="">Tahun Pembelian</th>
                <th class="">RAM</th>
                <th class="">CPU</th>
                <th class="">Kode</th>
                <th class="">Merk</th>
                <th class="">Waktu Input</th>
            </tr>
        </thead>
        <tbody class="">
        @foreach ($data as $n)
            <tr class="items-center text-center">
            <td class="">{{ $n->id }}</td>
                <td class="">{{ $n->nama_user }}</td>
                <td class="">{{ $n->nama_bagian }}</td>
                <td class="">{{ $n->th_pembelian }}</td>
                <td class="">{{ $n->ram }}</td>
                <td class="">{{ $n->cpu }}</td>
                <td class="">{{ $n->kode }}</td>
                <td class="">{{ $n->merk }}</td>
                <td class="">{{ $n->created_at }}</td>
                <td>
                    <button type="submit" class="bg-blue-400 p-3 rounded-lg">
                        <a href="{{ route('inventaris.show', $n->id) }}">
                            Detail
                        </a>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>    
    </div>
</x-app-layout>
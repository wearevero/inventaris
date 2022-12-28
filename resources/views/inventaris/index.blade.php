<x-app-layout>
    <div class="px-20 my-10">

    <!-- Tombol Tambah -->
    <div class="mx-auto flex justify-between">
        <button class="bg-slate-200 text-black rounded-full p-3">
            <a href={{ route('inventaris.tambah') }}>
                Tambah
            </a>
        </button>

        <!-- Search Function -->
            <input type="text" placeholder="Cari data di sini" class="text-center   p-1 rounded-xl bg-transparent">
            <button class="bg-yellow-400 text-black rounded-full p-3">Cari Data</button>
      
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
                    <th class="border-b-2 border-solid border-sky-700">Opsi</th>
                </tr>
            </thead>
            <tbody class="border-t border-t-red-500">
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
                    <td class="flex space-x-2">
                        <button type="submit" class="bg-blue-400 p-1 rounded-md">
                            <a href="{{ route('inventaris.show', $n->id) }}">
                               Detail 
                            </a>
                        </button>
                        <button type="submit" class="bg-green-400 p-1 rounded-md">
                            <a href="{{ route('inventaris.show', $n->id) }}">
                               Ubah 
                            </a>
                        </button>
                        <form action="{{ route('inventaris.destroy', $n->id) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="bg-red-400 p-1 rounded-md">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>   
        </div> 
    </div>
</x-app-layout>
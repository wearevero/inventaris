<x-app-layout title="Index">
    <div class="px-20 my-10">
        <div class="flex justify-between text-center">
            <a href="{{ route('inventaris.tambah') }}">
                <button class="bg-sky-400 text-white rounded-lg p-2 hover:bg-white hover:text-black">Input Data</button>
            </a>
            <a href="{{ route('bagian.index') }}">
                <button>
                    Master Bagian
                </button>
            </a>
            <form method="POST" class="flex space-x-5" action="{{ route('inventaris.import') }}" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="p-1 text-center items-center rounded-lg bg-transparent border border-slate-300 border-dashed" required />
                <button type="submit" class="bg-yellow-400 text-white rounded-lg p-2 hover:bg-white hover:text-black">Upload</button>
            </form>
            <button class="bg-rose-400 text-white rounded-lg p-2 hover:bg-white hover:text-black">
                <a href="{{ route('inventaris.export') }}">
                    Export ke Excel
                </a>
            </button>
            <form method="GET">
                <input type="text" name="cari" value="{{ old('cari') }}" class="p-2 text-center rounded-lg bg-transparent" placeholder="Cari data di sini...">
                <button value="cari" class="bg-green-400 text-white rounded-lg p-2 hover:bg-white hover:text-black" type="submit">Cari Data</button>
            </form>
        </div>

    <table class="border-separate items-center align-middle text-black dark:text-white mx-auto rounded-lg border-spacing-4 table-auto my-10 border border-dotted border-black">
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
                <th class="">Opsi</th>
            </tr>
        </thead>
        <tbody class="">
        @foreach ($datas as $data)
            <tr class="items-center text-center">
                <td class="">{{ $data->id }}</td>
                <td class="">{{ $data->nama_user }}</td>
                <td class="">{{ $data->nama_bagian }}</td>
                <td class="">{{ $data->th_pembelian }}</td>
                <td class="">{{ $data->ram }}</td>
                <td class="">{{ $data->cpu }}</td>
                <td class="">{{ $data->kode }}</td>
                <td class="">{{ $data->merk }}</td>
                <td class="flex space-x-2">
                    <button type="submit" class="bg-blue-400 p-1 rounded-lg hover:bg-white hover:text-black">
                        <a href="{{ route('inventaris.show', $data->id) }}">
                            Detail
                        </a>
                    </button>
                    <button type="submit" class="bg-green-400 p-1 rounded-lg hover:bg-white hover:text-black">
                        <a href="{{ route('inventaris.edit', $data->id) }}">
                            Update
                        </a>
                    </button>
                    <form action="{{ route('inventaris.destroy', $data->id) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="bg-red-400 p-1 rounded-lg hover:bg-white hover:text-black">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>    
    </div>
</x-app-layout>
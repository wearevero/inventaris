<x-app-layout title="Detail {{ $data->nama_user}}">
    <div class="container text-center my-20 p-5">
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
                    <td>
                        <button class="bg-blue-400 p-3 rounded-lg">
                        <a href="">Update</a>
                        </button>
                    </td>
                    <td>
                        <form action="{{ route('inventaris.destroy', $data->id) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="bg-red-400 p-3 rounded-lg">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>
<x-app-layout title="Kategori">
    <div class="mx-auto my-10 container">
        <h1 class="text-2xl font-display text-center text-oranged">
            List Kategori
        </h1>
        <table class="border-separate mx-auto text-black dark:text-white rounded-lg border-spacing-4 table-auto my-10 border border-dotted border-black">
            <thead class="">
                <tr class="text-2xl font-basement text-white">
                    <th class="">ID Kategori</th>
                    <th class="">Nama kategori</th>
                    <th class="">Kode Kategori</th>
                    <th class="">Updated at</th>
                </tr>
            </thead>
            <tbody class="text-2xl font-montreal text-slate-300">
            @foreach ($kategoris as $kategori)
                <tr class="items-center text-center">
                    <td class="">{{ $kategori->id_kategori }}</td>
                    <td class="">{{ $kategori->nama_kategori }}</td>
                    <td class="">{{ $kategori->kode_kategori }}</td>
                    <td class="">{{ $kategori->updated_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table> 
    </div>
</x-app-layout>
<x-app-layout>
    <div class="mx-auto container">
        <table class="border-separate items-center align-middle text-black dark:text-white mx-auto rounded-lg border-spacing-4 table-auto my-10 border border-dotted border-black">
            <thead class="">
                <tr class="text-2xl font-mono">
                    <th class="">ID Kategori</th>
                    <th class="">Nama kategori</th>
                </tr>
            </thead>
            <tbody class="">
            @foreach ($kategoris as $kategori)
                <tr class="items-center text-center">
                    <td class="">{{ $kategori->id_kategori }}</td>
                    <td class="">{{ $kategori->nama_kategori }}</td>
                </tr>
            @endforeach
            </tbody>
        </table> 
    </div>
</x-app-layout>
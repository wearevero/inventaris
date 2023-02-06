<x-app-layout title="Kategori">
    <div class="mx-auto my-10 container">
        <h1 class="text-2xl font-display text-center text-oranged">
            List Kategori
        </h1>
        <table class="border-separate mx-auto text-black dark:text-white rounded-lg border-spacing-4 table-auto my-10 border border-dotted border-black">
            <thead class="">
                <tr class="text-2xl font-basement text-white">
                    <th class="">ID</th>
                    <th class="">Nama Kategori</th>
                    <th class="">Kode</th>
                    <th class="">Last Updated</th>
                    <th class="">Action</th>
                </tr>
            </thead>
            <tbody class="text-2xl uppercase font-montreal text-slate-300">
            @foreach ($kategoris as $kategori)
                <tr class="items-center text-center">
                    <td class="">{{ $kategori->id }}</td>
                    <td class="">{{ $kategori->nama }}</td>
                    <td class="">{{ $kategori->kode }}</td>
                    <td class="">{{ $kategori->updated_at->format('d M Y h:m:s') }}</td>
                    <td class="">
                        <button type="submit" class="w-full items-end text-xl text-black uppercase rounded-lg font-montreal p-2 hover:bg-oranged hover:text-white border-4 border-oranged bg-white font-bold shadow-[6px_6px_0_0] shadow-oranged transition hover:shadow-none focus:outline-none focus:ring active:bg-oranged">
                            <a href="/kategori/{{ $kategori->nama }}">
                                See All Kategori {{ $kategori->nama }}
                            </a>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table> 
    </div>
</x-app-layout>
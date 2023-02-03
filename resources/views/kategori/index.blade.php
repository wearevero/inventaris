<x-app-layout title="Kategori">
    <div class="mx-auto my-10 container">
        <h1 class="text-2xl font-display text-center text-oranged">
            List Kategori
        </h1>
        <table class="border-separate mx-auto text-black dark:text-white rounded-lg border-spacing-4 table-auto my-10 border border-dotted border-black">
            <thead class="">
                <tr class="text-2xl font-basement text-white">
                    <th class="">ID</th>
                    <th class="">Kategori</th>
                    <th class="">Kode</th>
                    <th class="">Updated</th>
                    <th class="">Action</th>
                </tr>
            </thead>
            <tbody class="text-2xl font-montreal text-slate-300">
            @foreach ($kategoris as $kategori)
                <tr class="items-center text-center">
                    <td class="">{{ $kategori->id }}</td>
                    <td class="text-left">{{ $kategori->nama }}</td>
                    <td class="">{{ $kategori->kode }}</td>
                    <td class="">{{ $kategori->updated_at }}</td>
                    <td class="">
                        <button type="submit" class="px-4 items-end text-xl text-black uppercase rounded-lg font-space hover:bg-oranged hover:text-white border-4 border-oranged bg-white font-bold shadow-[6px_6px_0_0] shadow-oranged transition hover:shadow-none focus:outline-none focus:ring active:bg-oranged">
                            <a href="/kategori/{{ $kategori->slug }}">
                                See All Data {{ $kategori->nama }}
                            </a>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table> 
    </div>
</x-app-layout>
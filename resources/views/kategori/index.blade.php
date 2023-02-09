<x-app-layout title="Kategori">
    <div class="mx-auto my-10 container">
        <div class="flex justify-between my-10 items-center text-center">
            <h1 class="text-3xl font-display mx-auto text-center text-vero">
                List Kategori
            </h1>
        </div>
        <table class="border-separate mx-auto text-black rounded-lg border-spacing-4 table-auto my-10">
            <thead class="">
                <tr class="text-xl font-display text-black">
                    <th class="">No</th>
                    <th class="px-5">Kategori</th>
                    <th class="">Kode</th>
                    <th class="px-5">Updated</th>
                    <th class="">Action</th>
                </tr>
            </thead>
            <tbody class="text-2xl uppercase font-montreal text-gray-700">
            @foreach ($kategoris as $kategori)
                <tr class="items-center text-center">
                    <td class="">{{ $kategori->id }}.</td>
                    <td class="">{{ $kategori->nama }}</td>
                    <td class="">{{ $kategori->kode }}</td>
                    <td class="">{{ $kategori->updated_at->format('d M Y') }}</td>
                    <td class="">
                        <button type="submit" class="w-full items-end px-1 text-xl text-black uppercase rounded-lg font-montreal py-1 hover:bg-vero hover:text-white border-4 border-vero bg-white font-bold shadow-[4px_4px_0_0] shadow-vero transition hover:shadow-none focus:outline-none focus:ring active:bg-vero">
                            <a href="/kategori/{{ $kategori->slug }}">
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
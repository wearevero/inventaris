<x-app-layout title="Index">
    <div class="px-20 my-10">
        <div class="flex justify-between text-center">
            <button class="px-4 uppercase rounded-lg font-space hover:bg-oranged hover:text-white border-4 border-oranged bg-white font-bold shadow-[6px_6px_0_0] shadow-oranged text-xl transition hover:shadow-none focus:outline-none focus:ring active:bg-oranged">
                <a href="{{ route('inventaris.export') }}">
                    Export
                </a>
            </button>
            <form method="GET" action="{{ route('inventaris.search') }}">
                <input type="text" name="search" id="search" value="{{ old('search') }}" class="p-4 border-oranged text-white focus:border-oranged focus:ring-0 font-space text-center rounded-lg bg-transparent uppercase" placeholder="Cari data di sini...">
                <button value="search" class="uppercase rounded-lg font-space mx-3 text-xl tracking-wider text-black bg-white hover:bg-oranged hover:text-white border-4 border-oranged px-2 py-2 font-bold shadow-[6px_6px_0_0] shadow-oranged transition hover:shadow-none focus:outline-none focus:ring active:bg-oranged" type="submit">Search</button>
            </form>
        </div>

        @isset($kategori)
            Kategori : {{ $kategori->id_kategori }}
        @endisset

    <table class="border-separate text-white text-center items-center border-spacing-5 w-full align-middle border-white dark:text-white mx-auto rounded-lg table-auto my-10 border-2 border-solid">
        <thead class="">
            <tr class="font-display tracking-widest" data-aos="fade-up" data-aos-delay="500" data-aos-anchor-placement="bottom-bottom">
                <th class="py-5 px-5">User</th>
                <th class="py-5 px-5">Bagian</th>
                <th class="py-5 px-20">CPU</th>
                <th class="py-5 px-5">Kode</th>
                <th class="py-5 px-5">action</th>
            </tr>
        </thead>
        <tbody class="">
        @foreach ($datas as $data)
            <tr class="items-center tracking-wider text-gray-300 font-montreal flex-row align-middle text-center">
                <td class="font-basement">{{ $data->nama_user }}</td>
                <td class="">{{ $data->bagian->nama }}</td>
                <td class="">{{ $data->cpu }}</td>
                <td class="">{{ $data->kode }}</td>
                <td class="flex text-black space-x-2 align-middle font-space items-center">
                    <button type="submit" class="uppercase rounded-lg font-space hover:bg-blue-300 text-white hover:text-white border-4 border-blue-300 bg-black px-2 py-2 font-bold shadow-[4px_4px_0_0] shadow-blue-300 transition hover:shadow-none focus:outline-none focus:ring active:bg-blue-300">
                        <a href="{{ route('inventaris.show', $data->id) }}">
                            Detail
                        </a>
                    </button>
                    <button type="submit" class="uppercase rounded-lg font-space hover:bg-green-300 hover:text-white text-white border-4 border-green-300 px-2 py-2 font-bold shadow-[4px_4px_0_0] shadow-green-300 transition hover:shadow-none focus:outline-none focus:ring active:bg-green-300">
                        <a href="{{ route('inventaris.edit', $data->id) }}">
                            Update
                        </a>
                    </button>
                    <form action="{{ route('inventaris.destroy', $data->id) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="uppercase rounded-lg font-space hover:bg-rose-300 hover:text-white border-4 border-rose-300 text-white px-2 py-2 font-bold shadow-[4px_4px_0_0] shadow-rose-300 transition hover:shadow-none focus:outline-none focus:ring active:bg-rose-300">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
        <div class="text-center mx-auto items-center">
          {{ $datas->links() }}
        </div>
    </div>
</x-app-layout>
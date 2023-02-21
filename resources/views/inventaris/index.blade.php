<x-app-layout title="All Data">
    <div class="px-20 my-10">
        <div class="flex justify-between text-center">
            <button
                class="px-1 uppercase rounded-lg font-space hover:bg-rose-300 hover:text-white border-4 border-rose-300 bg-white font-bold shadow-[4px_4px_0_0] shadow-rose-300 text-xl transition hover:shadow-none focus:outline-none focus:ring active:bg-rose-300">
                <a href="{{ route('inventaris.export') }}">
                    Export
                </a>
            </button>

            {{--  --}}
            <form action="/inventaris" method="GET">
                @csrf
                <input name="nama_user" type="text" placeholder="John Doe" value="{{ isset($_GET['nama_user']) ? $_GET['nama_user'] : '' }}" class="p-3 border-yellow-300 text-black focus:border-yellow-300 tracking-wide focus:ring-0 font-montreal text-center rounded-lg bg-ivory uppercase" />
    
                {{-- Nama --}}
                <select name="bagian_id" class="mb-3 mt-1 bg-yellow-300 text-white border-yellow-300 rounded-md text-lg outline-none focus:ring-yellow-300 active:outline-none focus:outline-yellow-300">
                    <option value="">BAGIAN</option>
                    @foreach ($bagians as $dt)
                        <option value="{{ $dt->id }}"
                            {{ old('bagian_id') == $dt->id ? 'selected' : null }}>{{ $dt->nama }}
                        </option>
                    @endforeach
                </select>
    
                {{-- Status --}}
                <select name="status_id" class="mb-3 mt-1 bg-yellow-300 text-white border-yellow-300 rounded-md text-lg outline-none focus:ring-yellow-300 active:outline-none focus:outline-yellow-300">
                    <option value="">STATUS</option>
                    @foreach ($status as $dt)
                        <option value="{{ $dt->id }}" class=""
                            {{ old('status_id') == $dt->id ? 'selected' : null }}>{{ $dt->nama_status }}
                        </option>
                    @endforeach
                </select>
    
                {{-- Kategori --}}
                <select name="kategori_id" class="mb-3 mt-1 text-white border-yellow-300 rounded-md text-lg outline-none focus:ring-yellow-300 active:outline-none focus:outline-yellow-300 bg-yellow-300">
                    <option>KATEGORI</option>
                        @foreach ($kategoris as $dt)
                            <option value="{{ $dt->id }}"
                                {{ old('kategori_id') == $dt->id ? 'selected' : null }}>{{ $dt->nama }}
                            </option>
                        @endforeach
                </select>
    
                <button value="search"
                    class="uppercase rounded-lg font-montreal mx-3 text-xl tracking-wider text-black bg-white hover:bg-rose-300 hover:text-white border-4 border-rose-300 p-3 font-bold shadow-[4px_4px_0_0] shadow-rose-300 transition hover:shadow-none focus:outline-none focus:ring active:bg-rose-300"
                    type="submit">
                    Search
                </button>
            </form>
            {{--  --}}

            {{-- <form method="GET" action="{{ route('inventaris.search') }}">
                <input type="text" name="search" id="search" value="{{ old('search') }}"
                    class="p-4 border-vero text-black focus:border-vero tracking-wide focus:ring-0 font-montreal text-center rounded-lg bg-transparent uppercase"
                    placeholder="Cari data di sini...">
                <button value="search"
                    class="uppercase rounded-lg font-montreal mx-3 text-xl tracking-wider text-black bg-white hover:bg-vero hover:text-white border-4 border-vero px-2 py-2 font-bold shadow-[6px_6px_0_0] shadow-vero transition hover:shadow-none focus:outline-none focus:ring active:bg-vero"
                    type="submit">Search</button>
            </form> --}}
        </div>

        <div class="mt-5">
            <p class="font-montreal text-2xl">Total All Data : {{ $count }}</p>
        </div>
        
        <table
            class="border-separate text-black text-center items-center border-spacing-5 w-full align-middle border-vero mx-auto rounded-md table-auto my-10 border-2 border-solid">
            <thead class="">
                <tr class="font-display tracking-widest text-xl" data-aos="fade-up" data-aos-delay="500"
                    data-aos-anchor-placement="bottom-bottom">
                    <th class="py-5 px-5">User</th>
                    <th class="py-5 px-5">Bagian</th>
                    <th class="py-5 px-5">Kode</th>
                    <th class="py-5 px-5">status</th>
                    <th class="py-5 px-5">action</th>
                </tr>
            </thead>
            <tbody class="">
                @foreach ($users as $data)
                    <tr
                        class="items-center tracking-wider text-lg text-gray-800 font-montreal flex-row align-middle text-center">
                        <td class="font-basement uppercase">{{ $data->nama_user }}</td>
                        <td>{{ $data->bagian->nama }}</td>
                        <td>{{ $data->kode }}</td>
                        <td>
                            <span>
                                @if ($data->status->id == 1)
                                    <span class="py-1 px-2 rounded-lg bg-green-300 text-black">
                                        {{ $data->status->nama_status }}
                                    </span>
                                @elseif($data->status->id == 2)
                                    <span class="py-1 px-2 rounded-lg bg-blue-300 text-black">
                                        {{ $data->status->nama_status }}
                                    </span>
                                @elseif($data->status->id == 3)
                                    <span class="py-1 px-2 rounded-lg bg-red-300 text-black">
                                        {{ $data->status->nama_status }}
                                    </span>
                                @endif
                            </span>
                        </td>
                        <td class="flex text-black space-x-2 align-middle font-space items-center">
                            <button type="submit"
                                class="uppercase rounded-lg font-space hover:bg-blue-300 text-black hover:text-white border-4 border-blue-300 bg-transparent px-2 py-2 font-bold shadow-[4px_4px_0_0] shadow-blue-300 transition hover:shadow-none focus:outline-none focus:ring active:bg-blue-300">
                                <a href="{{ route('inventaris.show', $data->id) }}">
                                    Detail
                                </a>
                            </button>
                            <button type="submit"
                                class="uppercase rounded-lg font-space hover:bg-green-300 hover:text-white text-black border-4 border-green-300 px-2 py-2 font-bold shadow-[4px_4px_0_0] shadow-green-300 transition hover:shadow-none focus:outline-none focus:ring active:bg-green-300">
                                <a href="{{ route('inventaris.edit', $data->id) }}">
                                    Update
                                </a>
                            </button>
                            <form action="{{ route('inventaris.destroy', $data->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit"
                                    class="uppercase rounded-lg font-space hover:bg-rose-300 hover:text-white border-4 border-rose-300 text-black px-2 py-2 font-bold shadow-[4px_4px_0_0] shadow-rose-300 transition hover:shadow-none focus:outline-none focus:ring active:bg-rose-300">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center font-montreal tracking-wider mx-auto items-center">
            {{ $users->links() }}
        </div>
    </div>
</x-app-layout>

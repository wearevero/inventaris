<x-app-layout title="All Data">
    <div class="px-10 my-10">
        <div class="flex justify-between text-center">
            <button
                class="px-2 rounded-lg font-montreal hover:bg-rose-300 hover:text-white border-4 border-rose-300 bg-white font-bold shadow-[3px_3px_0_0] shadow-rose-300 text-xl transition hover:shadow-none focus:outline-none focus:ring active:bg-rose-300">
                <a href="{{ route('inventaris.export') }}">
                    Export
                </a>
            </button>

            {{-- Search function --}}
            <form action="/inventaris" method="GET" class="font-montreal">
                @csrf
                <input name="nama_user" type="text" placeholder="Vero"
                    value="{{ isset($_GET['nama_user']) ? $_GET['nama_user'] : '' }}"
                    class="p-3 border-rose-300 border-2 text-black focus:border-rose-300 tracking-wide focus:ring-0 font-montreal text-center rounded-lg bg-ivory uppercase" />

                {{-- Status --}}
                <select name="status_id"
                    class="mb-3 mt-1 bg-rose-300 text-white border-rose-300 rounded-md text-lg outline-none focus:ring-rose-300 active:outline-none focus:outline-rose-300">
                    <option value="">Status</option>
                    @foreach ($status as $dt)
                        <option value="{{ $dt->id }}"{{ old('status_id') == $dt->id ? 'selected' : null }}>
                            {{ $dt->nama_status }}
                        </option>
                    @endforeach
                </select>

                {{-- Kategori --}}
                <select name="kategori_id"
                    class="mb-3 mt-1 text-white border-rose-300 rounded-md text-lg outline-none focus:ring-rose-300 active:outline-none focus:outline-rose-300 bg-rose-300">
                    <option value="">Category</option>
                    @foreach ($kategoris as $dt)
                        <option value="{{ $dt->id }}" {{ old('kategori_id') == $dt->id ? 'selected' : null }}>
                            {{ $dt->nama }}
                        </option>
                    @endforeach
                </select>

                {{-- Bagian --}}
                <select name="bagian_id"
                    class="mb-3 mt-1 bg-rose-300 text-white border-rose-300 rounded-md text-lg outline-none focus:ring-rose-300 active:outline-none focus:outline-rose-300">
                    <option value="">Section</option>
                    @foreach ($bagians as $dt)
                        <option value="{{ $dt->id }}" {{ old('bagian_id') == $dt->id ? 'selected' : null }}>
                            {{ $dt->nama }}
                        </option>
                    @endforeach
                </select>

                <button value="search"
                    class="rounded-lg font-montreal mx-3 text-xl tracking-wider text-black bg-white hover:bg-rose-300 hover:text-white border-4 border-rose-300 p-3 font-bold shadow-[4px_4px_0_0] shadow-rose-300 transition hover:shadow-none focus:outline-none focus:ring active:bg-rose-300"
                    type="submit">
                    Search
                </button>
            </form>
            {{-- End search function --}}
        </div>

        <div class="my-10">
            <p class="font-montreal text-lg text-gray-500 italic tracking-wide">
                Data in on this page — {{ $users->count() }}
                <br>
                Rendering pages — {{ number_format(microtime(true) - LARAVEL_START, 1) }} seconds.
            </p>
        </div>

        <table
            class="border-separate justify-center w-full align-middle text-black text-center items-center border-spacing-5 border-vero rounded-md my-10 border-2 border-solid">
            <thead class="">
                <tr class="font-display tracking-widest text-xl" data-aos="fade-up" data-aos-delay="500"
                    data-aos-anchor-placement="bottom-bottom">
                    <th class="py-5 px-5">No</th>
                    <th class="py-5 px-5">User</th>
                    <th class="py-5 px-5">Section</th>
                    <th class="py-5 px-5">Code</th>
                    <th class="py-5 px-5">Status</th>
                    <th class="py-5 px-5">Action</th>
                </tr>
            </thead>
            <tbody class="">
                @foreach ($users as $data)
                    <tr
                        class="items-center uppercase tracking-wider text-lg text-gray-800 font-montreal flex-row align-middle text-center">
                        <td>{{ $data->id }}.</td>
                        <td class="font-basement uppercase">{{ $data->nama_user }}</td>
                        <td>{{ $data->bagian->nama }}</td>
                        <td>{{ $data->kode }}</td>
                        <td>
                            <span>
                                @if ($data->status->id == 1)
                                    <span class="py-1 px-2 rounded-lg bg-green-300/30 border-green-500 text-green-900">
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
                        <td class="flex text-black space-x-2 align-middle font-montreal items-center">
                            <button type="submit"
                                class="rounded-lg hover:bg-blue-300 text-black hover:text-white border-4 border-blue-300 bg-transparent px-2 py-2 font-bold shadow-[4px_4px_0_0] shadow-blue-300 transition hover:shadow-none focus:outline-none focus:ring active:bg-blue-300">
                                <a href="{{ route('inventaris.show', $data->id) }}">
                                    Detail
                                </a>
                            </button>
                            <button type="submit"
                                class="rounded-lg hover:bg-green-300 hover:text-white text-black border-4 border-green-300 px-2 py-2 font-bold shadow-[4px_4px_0_0] shadow-green-300 transition hover:shadow-none focus:outline-none focus:ring active:bg-green-300">
                                <a href="{{ route('inventaris.edit', $data->id) }}">
                                    Update
                                </a>
                            </button>
                            <form action="{{ route('inventaris.destroy', $data->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit"
                                    class="rounded-lg hover:bg-rose-300 hover:text-white border-4 border-rose-300 text-black px-2 py-2 font-bold shadow-[4px_4px_0_0] shadow-rose-300 transition hover:shadow-none focus:outline-none focus:ring active:bg-rose-300">
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

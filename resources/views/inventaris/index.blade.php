<x-app-layout title="All Data">
    <div class="px-10 my-10">
        <div class="flex justify-between text-center">
            <button
                class="px-4 text-geistWhite bg-gray-500/10 rounded-lg tracking-wide font-montreal border-2 hover:bg-gray-300/10 border-geistWhite text-lg transition focus:outline-none">
                <a href="{{ route('inventaris.export') }}">
                    Export
                </a>
            </button>


            {{-- Search function --}}
            <form action="{{ route('inventaris.index') }}" method="get" class="font-montreal space-x-2">
                @csrf                
                {{-- Status --}}
                                <select name="status_id"
                                class="bg-gray-600/10 text-white border-gray-600 active:bg-gray-600 focus:bg-gray-600 rounded-lg text-md outline-none focus:ring-none focus:border-none active:border-transparent active:outline-none focus:outline-none">
                                <option value="{{ old('kategori_id') }}">Status</option>
                                @foreach ($status as $dt)
                                    <option value="{{ $dt->id }}"{{ old('status_id') == $dt->id ? 'selected=true' : '' }}>
                                        {{ $dt->nama_status }}
                                    </option>
                                @endforeach
                            </select>
            
                            {{-- Kategori --}}
                            <select name="kategori_id"
                                class="bg-gray-600/10 text-white border-gray-600 active:bg-gray-600 focus:bg-gray-600 rounded-lg text-md outline-none focus:ring-none focus:border-none active:border-transparent active:outline-none focus:outline-none">
                                <option value="">Category</option>
                                @foreach ($kategoris as $dt)
                                    <option value="{{ $dt->id }}" {{ old('kategori_id') == $dt->id ? 'selected' : null }}>
                                        {{ $dt->nama }}
                                    </option>
                                @endforeach
                            </select>
            
                            {{-- Bagian --}}
                            <select name="bagian_id"
                                class="bg-gray-600/10 text-white border-gray-600 active:bg-gray-600 focus:bg-gray-600 rounded-lg text-md outline-none focus:ring-none focus:border-none active:border-transparent active:outline-none focus:outline-none">
                                <option value="">Section</option>
                                @foreach ($bagians as $bagian)
                                    <option value="{{ $bagian->id }}" {{ old('bagian_id') == $bagian->id ? 'selected=true' : '' }}>
                                        {{ $bagian->nama }}
                                    </option>
                                @endforeach
                            </select>
                <input name="nama_user" type="text" placeholder="Cari nama"
                    class="py-2 border-geistWhite border text-geistWhite focus:border-geistWhite tracking-wide focus:ring-0 font-montreal text-center rounded-xl bg-geistForeground uppercase" />
                <button
                    class="px-4 py-1 text-geistWhite bg-gray-500/10 rounded-lg tracking-wide font-montreal border-2 hover:bg-gray-300/10 border-geistWhite text-lg transition focus:outline-none"
                    type="submit">
                    Search
                </button>
                <button
                    name="keyword"
                    class="px-4 py-1 text-geistErrorLight bg-geistErrorLight/10 rounded-lg tracking-wide font-montreal border-2 hover:bg-geistErrorLight-300/10 border-geistErrorLight text-lg transition focus:outline-none"
                    type="submit">
                    Reset
                </button>
            </form>
            {{-- End search function --}}
        </div>

        <div class="my-10">
            <p class="font-montreal text-lg text-geistWhite italic tracking-wide">
                Rendering pages — {{ number_format(microtime(true) - LARAVEL_START, 1) }} seconds.
            </p>
        </div>

        <table
            class="border-separate justify-center w-full align-middle text-geistWhite text-center items-center border-spacing-5 border-geistSuccessLight rounded-xl my-10 border-2">
            <thead class="">
                <tr class="font-display tracking-wider text-xl" data-aos="fade-up" data-aos-delay="500"
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
                @foreach($users as $index => $item)
                    <p class="text-white">
                        {{ $index + 1 }}.
                    </p>
                @endforeach
                {{ $no = 1 }}
                @foreach ($users as $data)
                    <tr
                        class="items-center tracking-wide text-lg text-geistWhite font-montreal flex-row align-middle text-center">
                        <td>
                            {{ $no++ }}.
                        </td>
                        <td class="font-basement uppercase">{{ $data->nama_user }}</td>
                        <td>{{ $data->bagian->nama }}</td>
                        <td>{{ $data->kode }}</td>
                        <td>
                            <span>
                                @if ($data->status_id == 1)
                                    <span class="py-1 px-5 rounded-xl bg-geistSuccess/10 border-geistSuccess text-geistSuccess">
                                        {{ $data->status->nama_status }}
                                    </span>
                                @elseif($data->status_id == 2)
                                    <span class="py-1 px-5 rounded-xl bg-geistCyan/10 border-geistCyan text-geistCyan">
                                        {{ $data->status->nama_status }}
                                    </span>
                                @elseif($data->status_id == 3)
                                    <span class="py-1 px-5 rounded-xl bg-geistError/10 border-geistError text-geistError">
                                        {{ $data->status->nama_status }}
                                    </span>
                                @endif
                            </span>
                        </td>
                        <td class="flex space-x-2 align-middle font-montreal items-center">
                            <button type="submit" title="detail"
                                class="rounded-lg border border-geistSuccess bg-geistSuccessDark/10 hover:bg-geistSuccessLight/10 px-4 py-1 transition hover:shadow-none focus:outline-none focus:ring">
                                <a href="{{ route('inventaris.show', $data->id) }}">
                                    <x-feathericon-info title="detail" class="text-geistSuccess"/>
                                </a>
                            </button>
                            <button type="submit"
                                class="rounded-lg border border-geistCyan bg-geistCyanDark/10 hover:bg-geistCyanLight/10 px-4 py-1 transition hover:shadow-none focus:outline-none focus:ring">
                                <a href="{{ route('inventaris.edit', $data->id) }}">
                                    <x-feathericon-edit class="text-geistCyan"/>
                                </a>
                            </button>
                            <form action="{{ route('inventaris.destroy', $data->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit"
                                    class="rounded-lg border border-geistError bg-geistErrorDark/10 hover:bg-geistErrorLight/10 px-4 py-1 transition hover:shadow-none focus:outline-none focus:ring">
                                    <x-feathericon-trash class="text-geistError"/>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center font-montreal tracking-wide mx-auto items-center">
            {!! $users->appends($_GET)->links() !!}
        </div>
    </div>
</x-app-layout>

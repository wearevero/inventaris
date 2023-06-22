<x-app-layout title="Kategori {{ $slug }}">
    <div class="px-20 my-10">
        <div class="flex justify-between text-center">
            <div class="flex justify-between items-center mx-auto text-center">
                <h1 class="text-3xl font-display text-geistWhite mx-auto text-center">
                    List kategori : <span class="tracking-widest">{{ $slug }}</span>
                </h1>
            </div>
        </div>

        <table
            class="border-separate text-geistWhite text-center items-center border-spacing-5 w-full align-middle border-white dark:text-white mx-auto rounded-lg table-auto my-10 border-2 border-solid">
            <thead class="">
                <tr class="font-display tracking-widest" data-aos="fade-up" data-aos-delay="500"
                    data-aos-anchor-placement="bottom-bottom">
                    <th class="py-5 px-5">No</th>
                    <th class="py-5 px-5">User</th>
                    <th class="py-5 px-5">Bagian</th>
                    <th class="py-10 px-5">Kode</th>
                    <th class="py-10 px-5">Status</th>
                    <th class="py-5 px-5">Action</th>
                </tr>
            </thead>
            <tbody class="">
                @foreach ($datas as $data)
                <tr
                class="items-center tracking-wide text-lg text-geistWhite font-montreal flex-row align-middle text-center">
                <td>{{ $data->id }}.</td>
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
    </div>
</x-app-layout>

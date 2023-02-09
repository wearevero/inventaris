<x-app-layout title="Kategori {{ $slug }}">
    <div class="px-20 my-10">
        <div class="flex justify-between text-center">
            <div class="flex justify-between items-center mx-auto text-center">
                <h1 class="text-3xl font-display text-gray-700 mx-auto text-center">
                    List kategori : <span class="text-vero tracking-widest">{{ $slug }}</span>
                </h1>
            </div>
        </div>

    <table class="border-separate text-black text-center items-center border-spacing-5 w-full align-middle border-white dark:text-white mx-auto rounded-lg table-auto my-10 border-2 border-solid">
        <thead class="">
            <tr class="font-display tracking-widest" data-aos="fade-up" data-aos-delay="500" data-aos-anchor-placement="bottom-bottom">
                <th class="py-5 px-5">User</th>
                <th class="py-5 px-5">Bagian</th>
                <th class="py-10 px-5">Kode</th>
                <th class="py-10 px-5">Status</th>
                <th class="py-5 px-5">Action</th>
            </tr>
        </thead>
        <tbody class="">
        @foreach ($datas as $d)
            <tr class="items-center tracking-wider text-gray-700 font-montreal flex-row align-middle text-center">
                <td class="font-basement uppercase">{{ $d->nama_user }}</td>
                <td class="">{{ $d->bagian->nama }}</td>
                <td class="">{{ $d->kode }}</td>
                <td class="">
                    <span>
                        @if($d->status->id == 1)
                            <span class="py-1 px-2 rounded-lg bg-green-300 text-black">
                                {{ $d->status->nama_status }}
                            </span>
                        @elseif($d->status->id == 2)
                            <span class="py-1 px-2 rounded-lg bg-blue-300 text-black">
                                {{ $d->status->nama_status }}
                            </span>
                        @elseif($d->status->id == 3)
                            <span class="py-1 px-2 rounded-lg bg-red-300 text-black">
                                {{ $d->status->nama_status }}
                            </span>
                        @endif
                    </span>
                </td>
                <td class="flex text-black space-x-2 align-middle font-space items-center">
                    <button type="submit" class="uppercase rounded-lg font-space hover:bg-blue-300 text-black hover:text-white border-4 border-blue-300 px-2 py-2 font-bold shadow-[4px_4px_0_0] shadow-blue-300 transition hover:shadow-none focus:outline-none focus:ring active:bg-blue-300">
                        <a href="{{ route('inventaris.show', $d->id) }}">
                            Detail
                        </a>
                    </button>
                    <button type="submit" class="uppercase rounded-lg font-space hover:bg-green-300 hover:text-white text-black border-4 border-green-300 px-2 py-2 font-bold shadow-[4px_4px_0_0] shadow-green-300 transition hover:shadow-none focus:outline-none focus:ring active:bg-green-300">
                        <a href="{{ route('inventaris.edit', $d->id) }}">
                            Update
                        </a>
                    </button>
                    <form action="{{ route('inventaris.destroy', $d->id) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="uppercase rounded-lg font-space hover:bg-rose-300 hover:text-white border-4 border-rose-300 text-black px-2 py-2 font-bold shadow-[4px_4px_0_0] shadow-rose-300 transition hover:shadow-none focus:outline-none focus:ring active:bg-rose-300">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</x-app-layout>
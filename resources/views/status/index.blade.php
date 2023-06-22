<x-app-layout title="Status">
    <div class="mx-auto my-10 container">
        <div class="flex justify-between my-10 items-center text-center">
            <h1 class="text-3xl font-display mx-auto text-center text-geistWhite">
                List Status
            </h1>
        </div>
        <table class="border-separate mx-auto text-geistWhite rounded-lg border-spacing-4 table-auto my-10">
            <thead class="">
                <tr class="text-xl font-display text-geistWhite">
                    <th class="">No</th>
                    <th class="px-5">Status</th>
                    <th class="px-5">Updated</th>
                    <th class="">Action</th>
                </tr>
            </thead>
            <tbody class="text-2xl uppercase font-montreal text-geistWhite">
                @foreach ($status as $st)
                    <tr class="items-center text-center">
                        <td class="">{{ $st->id }}.</td>
                        <td class="">{{ $st->nama_status }}</td>
                        <td class="">{{ $st->updated_at->format('d M Y') }}</td>
                        <td class="">
                            <button type="submit"
                                class="w-full items-end px-1 text-xl uppercase rounded-lg font-montreal py-1 hover:bg-geistWhite text-geistWhite hover:text-geistForeground border-4 border-geistWhite bg-transparent font-bold shadow-[4px_4px_0_0] shadow-geistWhite transition hover:shadow-none focus:outline-none focus:ring active:bg-geistWhite">
                                <a href="/status/{{ $st->slug }}">
                                    See All status {{ $st->nama_status }}
                                </a>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>

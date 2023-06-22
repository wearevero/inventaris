<x-app-layout title="Bagian">
    <div class="mx-auto my-10 container">
        <h1 class="text-3xl font-display text-center text-geistWhite">
            List Bagian
        </h1>
        <table class="border-separate mx-auto text-geistWhite rounded-lg border-spacing-4 table-auto my-10">
            <thead class="">
                <tr class="text-lg font-display text-geistWhite">
                    <th class="">No</th>
                    <th class="px-5">Bagian</th>
                    <th class="px-5">Updated</th>
                    <th class="">Action</th>
                </tr>
            </thead>
            <tbody class="text-2xl uppercase font-montreal text-geistWhite">
                @foreach ($bagians as $bagian)
                    <tr class="items-center text-center">
                        <td class="">{{ $bagian->id }}.</td>
                        <td class="">{{ $bagian->nama }}</td>
                        <td class="">{{ $bagian->updated_at->format('d M Y') }}</td>
                        <td class="">
                            <button type="submit"
                                class="w-full items-end px-1 text-xl uppercase rounded-lg font-montreal py-1 hover:bg-geistWhite text-geistWhite hover:text-geistForeground border-4 border-geistWhite bg-transparent font-bold shadow-[4px_4px_0_0] shadow-geistWhite transition hover:shadow-none focus:outline-none focus:ring active:bg-geistWhite">
                                <a href="/bagian/{{ $bagian->slug }}">
                                    See All Data on {{ $bagian->nama }}
                                </a>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>

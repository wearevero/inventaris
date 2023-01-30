<x-app-layout>
    <div class="container mx-auto p-5">
    {{-- Table bagian --}}
    <table class="border-separate items-center align-middle text-white dark:text-white mx-auto rounded-lg border-spacing-4 table-auto my-10 border border-dotted border-black">
        <thead class="">
            <tr class="text-2xl font-display">
                <th class="">ID Bagian</th>
                <th class="">Nama Bagian</th>
                <th class="">action</th>
            </tr>
        </thead>
        <tbody class="">
        @foreach ($bagians as $bagian)
            <tr class="items-center font-basement text-center">
                <td class="">{{ $bagian->id_bagian }}</td>
                <td class="">{{ $bagian->nama_bagian }}</td>
                <td class="flex text-black space-x-2 align-middle font-space items-center">
                    <button type="submit" class="uppercase rounded-lg font-space hover:bg-blue-300 text-white hover:text-white border-4 border-blue-300 bg-black px-2 py-2 font-bold shadow-[4px_4px_0_0] shadow-blue-300 transition hover:shadow-none focus:outline-none focus:ring active:bg-oranged">
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
                        <button type="submit" class="uppercase rounded-lg font-space hover:bg-rose-300 hover:text-white border-4 border-rose-300 text-white px-2 py-2 font-bold shadow-[4px_4px_0_0] shadow-rose-300 transition hover:shadow-none focus:outline-none focus:ring active:bg-oranged">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>   
    <div>
</x-app-layout>
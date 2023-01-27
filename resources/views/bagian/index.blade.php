<x-app-layout>
    <div class="container mx-auto p-5">
    {{-- Table bagian --}}
    <table class="border-separate items-center align-middle text-black dark:text-white mx-auto rounded-lg border-spacing-4 table-auto my-10 border border-dotted border-black">
        <thead class="">
            <tr class="text-2xl font-mono">
                <th class="">ID Bagian</th>
                <th class="">Nama Bagian</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="">
        @foreach ($bagians as $bagian)
            <tr class="items-center text-center">
                <td class="">{{ $bagian->id_bagian }}</td>
                <td class="">{{ $bagian->nama_bagian }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>   
    <div>
</x-app-layout>
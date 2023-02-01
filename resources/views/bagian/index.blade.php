<x-app-layout title="Bagian">
    <div class="mx-auto my-10 container">
        <h1 class="text-2xl font-display text-center text-oranged">
            List Bagian
        </h1>
        <table class="border-separate mx-auto text-black dark:text-white rounded-lg border-spacing-4 table-auto my-10 border border-dotted border-black">
            <thead class="">
                <tr class="text-2xl font-basement text-white">
                    <th class="">ID Bagian</th>
                    <th class="">Nama Bagian</th>
                    <th class="">Updated at</th>
                </tr>
            </thead>
            <tbody class="text-2xl font-montreal text-slate-300">
            @foreach ($bagians as $bagian)
                <tr class="items-center text-center">
                    <td class="">{{ $bagian->id_bagian }}</td>
                    <td class="">{{ $bagian->nama_bagian }}</td>
                    <td class="">{{ $bagian->updated_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table> 
    </div>
</x-app-layout>
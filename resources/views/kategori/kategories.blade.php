<x-app-layout title="Category">
    <div class="text-white text-center">
        <ul>
        @foreach($datas as $d)
            <li>{{ $d->id }} - {{ $d->nama_user }} - {{ $d->bagian->nama }}</li>
        @endforeach
        </ul>
    </div>
</x-app-layout>
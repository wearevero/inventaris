<x-app-layout title="Category {{ $slug }}">
    <div class="text-white font-display my-20 px-20">
        <h1 class="text-center text-2xl text-oranged mb-10">
            Category : {{ $slug }}
        </h1>
        <ul>
        @foreach($datas as $d)
            <li class="text-xl mb-3">
                {{ $d->id }} — {{ $d->nama_user }} :: {{ $d->bagian->nama }} :: {{ $d->kode }} :: {{ $d->updated_at }}
            </li>
        @endforeach
        </ul>
    </div>
</x-app-layout>
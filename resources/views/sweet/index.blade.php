<x-app-layout title="Testing page">
    <form action="/sweet" method="GET">
        @csrf
        <input name="nama_user" type="text" value="{{ isset($_GET['nama_user']) ? $_GET['nama_user'] : '' }}" />
        <button type="submit" class="bg-red-500">Search</button>
    </form>
    <div class="my-20 text-black">
        @foreach($data as $d)
            {{ $d->id }}
        @endforeach
    </div>
</x-app-layout>

<x-app-layout>
    <div class="">
        <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current mt-10 text-gray-500" />
            </a>
        </x-slot>

        {{-- Input Manual --}}
        <div class="">
        <h1 class="text-center font-bold mb-5 text-2xl">
            Input Kategori
        </h1>
        <form method="POST" action="{{ route('kategori.store') }}">
            @csrf

            {{-- Nama Kategori --}}
            <div>
                <x-input-label for="nama_kategori" :value="__('Nama Kategori')" />
                <x-text-input id="nama_kategori" class="block mt-1 w-full" type="text" name="nama_kategori" :value="old('nama_kategori')" placeholder="Notebook" required autofocus />
                <x-input-error :messages="$errors->get('nama_kategori')" class="mt-2" />
            </div>

            {{-- Kode Kategori --}}
            <div>
                <x-input-label for="kode_kategori" :value="__('Kode Kategori')" />
                <x-text-input id="kode_kategori" class="block mt-1 w-full" type="text" name="kode_kategori" :value="old('kode_kategori')" placeholder="NB-6969" required autofocus />
                <x-input-error :messages="$errors->get('kode_kategori')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4">
                    {{ __('Tambah Kategori') }}
                </x-primary-button>
            </div>
        </form>
    </div>
    </x-auth-card>
</div>
</x-app-layout>
<x-app-layout title="Tambah Kategori">
    <div class="-mt-10">
        <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current mt-10 text-white" />
            </a>
        </x-slot>

        {{-- Input Manual --}}
        <div class="">
        <form method="POST" action="{{ route('kategori.store') }}" class="p-4">
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
                <x-text-input id="kode_kategori" class="block mt-1 w-full" type="text" name="kode_kategori" :value="old('kode_kategori')" placeholder="NB" required autofocus />
                <x-input-error :messages="$errors->get('kode_kategori')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-8">
                <x-primary-button class="ml-4 px-2 uppercase rounded-lg font-space hover:bg-oranged hover:text-white border-4 border-oranged bg-white font-bold shadow-[4px_4px_0_0] shadow-oranged text-lg transition hover:shadow-none focus:outline-none focus:ring active:bg-oranged">
                    {{ __('Tambah Kategori') }}
                </x-primary-button>
            </div>
        </form>
    </div>
    </x-auth-card>
</div>
</x-app-layout>
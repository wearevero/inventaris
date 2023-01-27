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
            Tambah Bagian
        </h1>
        <form method="POST" action="{{ route('bagian.store') }}">
            @csrf

            {{-- Nama Bagian --}}
            <div>
                <x-input-label for="nama_bagian" :value="__('Nama Bagian')" />
                <x-text-input id="nama_bagian" class="block mt-1 w-full" type="text" name="nama_bagian" :value="old('nama_bagian')" placeholder="Notebook" required autofocus />
                <x-input-error :messages="$errors->get('nama_bagian')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4">
                    {{ __('Tambah Bagian') }}
                </x-primary-button>
            </div>
        </form>
    </div>
    </x-auth-card>
</div>
</x-app-layout>
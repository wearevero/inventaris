<x-app-layout>
    <div class="-mt-20">
        <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current mt-10 text-white" />
            </a>
        </x-slot>

        {{-- Input Manual --}}
        <div class="">
        <form method="POST" action="{{ route('bagian.store') }}" class="p-4">
            @csrf

            {{-- Nama Bagian --}}
            <div>
                <x-input-label for="nama_bagian" :value="__('Nama Bagian')" />
                <x-text-input id="nama_bagian" class="block mt-1 w-full" type="text" name="nama_bagian" :value="old('nama_bagian')" placeholder="Veronique HQ (Office)" required autofocus />
                <x-input-error :messages="$errors->get('nama_bagian')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-8">
                <x-primary-button class="ml-4 px-2 uppercase rounded-lg font-space hover:bg-oranged hover:text-white border-4 border-oranged bg-white font-bold shadow-[4px_4px_0_0] shadow-oranged text-lg transition hover:shadow-none focus:outline-none focus:ring active:bg-oranged">
                    {{ __('Tambah Bagian') }}
                </x-primary-button>
            </div>
        </form>
    </div>
    </x-auth-card>
</div>
</x-app-layout>
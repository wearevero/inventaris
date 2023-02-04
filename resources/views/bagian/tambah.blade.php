<x-app-layout>
    <div class="-mt-20">
        <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current mt-10 text-white" />
            </a>
        </x-slot>

        <div class="z-50">
            <h1 class="text-center text-white font-basement font-bold text-2xl my-5">
                Import Data
            </h1>
            <form method="POST" class="flex space-x-5" action="{{ route('bagian.import') }}" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="p-1 text-center items-center rounded-md bg-transparent border border-slate-300 border-dashed" required />
                <button type="submit" class="px-4 uppercase rounded-lg font-space hover:bg-oranged hover:text-white border-4 border-oranged bg-white font-bold shadow-[6px_6px_0_0] shadow-oranged text-xl transition hover:shadow-none focus:outline-none focus:ring active:bg-oranged">Upload</button>
            </form>
        </div>

        <hr class="dark:background-white mt-10 mb-5 border-b border-dotted border-oranged"/>

        {{-- Input Manual --}}
        <div class="">
        <form method="POST" action="{{ route('bagian.store') }}" class="p-4">
            @csrf

            {{-- Nama Bagian --}}
            <div>
                <x-input-label for="nama" :value="__('Nama Bagian')" />
                <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" placeholder="Veronique HQ (Office)" required autofocus />
                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
            </div>

            {{-- slug --}}
            <div>
                <x-input-label for="slug" :value="__('Slug Bagian')" />
                <x-text-input id="slug" class="block mt-1 w-full" type="text" name="slug" :value="old('slug')" placeholder="cad-room" required autofocus />
                <x-input-error :messages="$errors->get('slug')" class="mt-2" />
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
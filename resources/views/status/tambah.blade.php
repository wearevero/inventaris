<x-app-layout title="Tambah Status">
    <div class="-mt-10">
        <x-auth-card>
            <x-slot name="logo">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current mt-10 text-vero" />
                </a>
            </x-slot>

            {{-- Input Manual --}}
            <div class="">
                <form method="POST" action="{{ route('status.store') }}" class="p-4">
                    @csrf

                    {{-- Nama Status --}}
                    <div>
                        <x-input-label for="nama_status" :value="__('Nama Status')" />
                        <x-text-input id="nama_status" class="block mt-1 w-full" type="text" name="nama_status"
                            :value="old('nama_status')" placeholder="Used" required autofocus />
                        <x-input-error :messages="$errors->get('nama_status')" class="mt-2" />
                    </div>

                    {{-- Slug --}}
                    <div>
                        <x-input-label for="slug" :value="__('Slug')" />
                        <x-text-input id="slug" class="block mt-1 w-full" type="text" name="slug"
                            :value="old('slug')" placeholder="veronique-hq" required autofocus />
                        <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-8">
                        <x-primary-button
                            class="ml-4 px-2 uppercase rounded-lg font-space hover:bg-vero hover:text-white border-4 border-vero bg-white font-bold shadow-[4px_4px_0_0] shadow-vero text-lg transition hover:shadow-none focus:outline-none focus:ring active:bg-vero">
                            {{ __('Tambah Status') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </x-auth-card>
    </div>
</x-app-layout>

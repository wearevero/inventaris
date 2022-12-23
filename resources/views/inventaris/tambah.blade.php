<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('inventaris.tambah') }}">
            @csrf

            <!-- Name User -->
            <div>
                <x-input-label for="nama_user" :value="__('Nama User')" />

                <x-text-input id="nama_user" class="block mt-1 w-full" type="text" name="nama_user" :value="old('nama_user')" required autofocus />

                <x-input-error :messages="$errors->get('nama_user')" class="mt-2" />
            </div>

            <!-- Nama Bagian -->
            <div>
                <x-input-label for="nama_bagian" :value="__('Nama Bagian')" />

                <x-text-input id="nama_bagian" class="block mt-1 w-full" type="text" name="nama_bagian" :value="old('nama_bagian')" required autofocus />

                <x-input-error :messages="$errors->get('nama_bagian')" class="mt-2" />
            </div>

            <!-- Kode -->
            <div>
                <x-input-label for="kode" :value="__('Kode')" />

                <x-text-input id="kode" class="block mt-1 w-full" type="text" name="kode" :value="old('kode')" required autofocus />

                <x-input-error :messages="$errors->get('kode')" class="mt-2" />
            </div>

            <!-- Th Pembelian -->
            <div>
                <x-input-label for="th_pembelian" :value="__('Tahun Pembelian')" />

                <x-text-input id="th_pembelian" class="block mt-1 w-full" type="text" name="th_pembelian" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('th_pembelian')" class="mt-2" />
            </div>

            <!-- RAM -->
            <div>
                <x-input-label for="ram" :value="__('RAM')" />

                <x-text-input id="ram" class="block mt-1 w-full" type="text" name="ram" :value="old('ram')" required autofocus />

                <x-input-error :messages="$errors->get('ram')" class="mt-2" />
            </div>

            <!-- CPU -->
            <div>
                <x-input-label for="cpu" :value="__('CPU')" />

                <x-text-input id="cpu" class="block mt-1 w-full" type="text" name="cpu" :value="old('cpu')" required autofocus />

                <x-input-error :messages="$errors->get('cpu')" class="mt-2" />
            </div>


            <!-- Merk -->
            <div>
                <x-input-label for="merk" :value="__('Merk')" />

                <x-text-input id="merk" class="block mt-1 w-full" type="text" name="merk" :value="old('merk')" required autofocus />

                <x-input-error :messages="$errors->get('merk')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4">
                    {{ __('Tambah Data') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

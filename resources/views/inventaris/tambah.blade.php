<x-app-layout title="Tambah Data" class="mt-20">
    <x-auth-card class="pb-10">
        <div class="">
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current mt-10 text-gray-500" />
            </a>
        </x-slot>
        <div class="">
            <h1 class="text-center font-bold text-2xl my-5">
                Import data template excel
            </h1>
            <form method="POST" class="flex space-x-5" action="{{ route('inventaris.import') }}" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="p-1 text-center items-center rounded-lg bg-transparent border border-slate-300 border-dashed" required />
                <button type="submit" class="bg-yellow-400 text-white rounded-lg p-2 hover:bg-white hover:text-black">Upload</button>
            </form>
        </div>

        <hr class="dark:background-white my-10 border-b dark:border-white dark:border-dotted"/>

        {{-- Input Manual --}}
        <div class="">
        <h1 class="text-center font-bold mb-5 text-2xl">
            Input Data Manual
        </h1>
        <form method="POST" action="{{ route('inventaris.tambah') }}">
            @csrf
            {{-- Name User --}}
            <div>
                <x-input-label for="nama_user" :value="__('Nama User')" />
                <x-text-input id="nama_user" class="block mt-1 w-full" type="text" name="nama_user" :value="old('nama_user')" placeholder="Admin Office" required autofocus />
                <x-input-error :messages="$errors->get('nama_user')" class="mt-2" />
            </div>

            {{-- Nama Bagian --}}
            <div>
                <x-input-label for="nama_bagian" :value="__('Nama Bagian')" />
                <x-text-input id="nama_bagian" class="block mt-1 w-full" type="text" name="nama_bagian" :value="old('nama_bagian')" placeholder="Office" required autofocus />
                <x-input-error :messages="$errors->get('nama_bagian')" class="mt-2" />
            </div>

            {{-- Kode --}}
            <div>
                <x-input-label for="kode" :value="__('Kode')" />
                <x-text-input id="kode" class="block mt-1 w-full" type="text" name="kode" :value="old('kode')" required autofocus placeholder="NB-0001" />
                <x-input-error :messages="$errors->get('kode')" class="mt-2" />
            </div>

            {{-- Th Pembelian --}}
            <div>
                <x-input-label for="th_pembelian" :value="__('Tahun Pembelian')" />
                <x-text-input id="th_pembelian" class="block mt-1 w-full" min="1976" max="9999" type="year" name="th_pembelian" placeholder="{{ date('Y', strtotime($waktu)) }}" :value="old('name')" autofocus />
                <x-input-error :messages="$errors->get('th_pembelian')" class="mt-2" />
            </div>

            {{-- RAM --}}
            <div>
                <x-input-label for="ram" :value="__('RAM')" />
                <x-text-input id="ram" class="block mt-1 w-full" type="text" name="ram" :value="old('ram')" required autofocus placeholder="RAM" />
                <x-input-error :messages="$errors->get('ram')" class="mt-2" />
            </div>

            {{-- CPU --}}
            <div>
                <x-input-label for="cpu" :value="__('CPU')" />
                <x-text-input id="cpu" class="block mt-1 w-full" type="text" name="cpu" :value="old('cpu')" placeholder="CPU" required autofocus />
                <x-input-error :messages="$errors->get('cpu')" class="mt-2" />
            </div>


            {{-- Merk --}}
            <div>
                <x-input-label for="merk" :value="__('Merk')" />
                <x-text-input id="merk" class="block mt-1 w-full" type="text" name="merk" :value="old('merk')" placeholder="MERK" required autofocus />
                <x-input-error :messages="$errors->get('merk')" class="mt-2" />
            </div>

            {{-- Keterangan --}}
            <div>
                <x-input-label for="keterangan" :value="__('Keterangan')" />
                <x-text-input id="keterangan" class="block mt-1 w-full" type="text" name="keterangan" :value="old('keterangan')" autofocus placeholder="Aktif / Tidak aktif" />
                <x-input-error :messages="$errors->get('keterangan')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4">
                    {{ __('Tambah Data') }}
                </x-primary-button>
            </div>
        </form>
    </div>
    </x-auth-card>
</div>
</x-app-layout>

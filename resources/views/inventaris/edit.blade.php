<x-app-layout title="Edit {{ $data->nama_user }}">
    <div class="mb-10">
        {{-- space --}}
    </div>
    <x-auth-card class="pb-20">
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="animate w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('inventaris.update', $data->id) }}">
            @method('put')
            @csrf
            <!-- Name User -->
            <div>
                <x-input-label for="nama_user" :value="__('Nama User')" />
                <x-text-input id="nama_user" class="block mt-1 w-full" type="text" name="nama_user" value="{{ $data->nama_user }}" autofocus />
                <x-input-error :messages="$errors->get('nama_user')" class="mt-2" />
            </div>

            <!-- Nama Bagian -->
            <div>
                <x-input-label for="id_bagian" :value="__('Bagian')" />
                <select name="id_bagian" id="id_bagian" class="mb-3 mt-1 bg-black border-gray-300 w-full rounded-md text-lg outline-none focus:ring-oranged text-white active:outline-none focus:outline-oranged">
                    <option value=""> {{ $data->bagian->nama_bagian }} </option>
                    @foreach($bagians as $bagian)
                    <option value="{{ $bagian->id_bagian }}" {{ old('id_bagian') == $bagian->id_bagian ? 'selected' : null }}>{{ $bagian->nama_bagian }}</option>
                    @endforeach
                </select>
            </div>
            
            {{-- Kategori --}}
            <div>
                <x-input-label for="kategori_id" :value="__('Kategori')" />
                <x-text-input id="kategori_id" class="block mt-1 w-full" type="text" name="kategori_id" value="{{ $data->kategori_id }}" placeholder="Kategori" autofocus />
                <x-input-error :messages="$errors->get('kategori_id')" class="mt-2" />
            </div>

            <!-- Kode -->
            <div>
                <x-input-label for="kode" :value="__('Kode')" />
                <x-text-input id="kode" class="block mt-1 w-full" type="text" name="kode" value="{{ $data->kode }}" autofocus />
                <x-input-error :messages="$errors->get('kode')" class="mt-2" />
            </div>

            <!-- Th Pembelian -->
            <div>
                <x-input-label for="th_pembelian" :value="__('Tahun Pembelian')" />
                <x-text-input id="th_pembelian" class="block mt-1 w-full" type="text" name="th_pembelian" value="{{ $data->th_pembelian }}" autofocus />
                <x-input-error :messages="$errors->get('th_pembelian')" class="mt-2" />
            </div>

            <!-- Memory -->
            <div>
                <x-input-label for="memory" :value="__('Memory')" />
                <x-text-input id="memory" class="block mt-1 w-full" type="text" name="memory" value="{{ $data->memory }}" autofocus />
                <x-input-error :messages="$errors->get('memory')" class="mt-2" />
            </div>

            <!-- CPU -->
            <div>
                <x-input-label for="cpu" :value="__('CPU')" />
                <x-text-input id="cpu" class="block mt-1 w-full" type="text" name="cpu" value="{{ $data->cpu }}" autofocus />
                <x-input-error :messages="$errors->get('cpu')" class="mt-2" />
            </div>


            <!-- Merk -->
            <div>
                <x-input-label for="merk" :value="__('Merk')" />
                <x-text-input id="merk" class="block mt-1 w-full" type="text" name="merk" value="{{ $data->merk }}" autofocus />
                <x-input-error :messages="$errors->get('merk')" class="mt-2" />
            </div>

            <!-- POSISI -->
            <div>
                <x-input-label for="posisi" :value="__('posisi')" />
                <x-text-input id="posisi" class="block mt-1 w-full" type="text" name="posisi" value="{{ $data->posisi }}" autofocus />
                <x-input-error :messages="$errors->get('cpu')" class="mt-2" />
            </div>

            <!-- SIZE MONITOR -->
            <div>
                <x-input-label for="size_monitor" :value="__('Size Monitor')" />
                <x-text-input id="size_monitor" class="block mt-1 w-full" type="text" name="size_monitor" value="{{ $data->size_monitor }}" autofocus />
                <x-input-error :messages="$errors->get('size_monitor')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4 px-4 uppercase rounded-lg font-space hover:bg-oranged hover:text-white border-4 border-oranged bg-white font-bold shadow-[6px_6px_0_0] shadow-oranged text-xl transition hover:shadow-none focus:outline-none focus:ring active:bg-oranged">
                    {{ __('Update') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-app-layout>
<x-app-layout title="Edit {{ $data->nama_user }}">
    <div class="mb-10"></div>
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
                <x-input-label for="bagian_id" :value="__('Bagian')" />
                <select name="bagian_id" id="bagian_id" class="mb-3 mt-1 bg-black border-gray-300 w-full rounded-md text-lg outline-none focus:ring-oranged text-white active:outline-none focus:outline-oranged">
                    <option value="{{ $data->bagian->id }}"> {{ $data->bagian->nama }} </option>
                    @foreach($bagians as $bagian)
                    <option value="{{ $bagian->id }}" {{ old('id') == $bagian->id ? 'selected' : null }}>{{ $bagian->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <x-input-label for="kategori" :value="__('Kategori')" />
                <select name="kategori" id="kategori" class="mb-3 mt-1 bg-black border-gray-300 w-full rounded-md text-lg outline-none focus:ring-oranged text-white active:outline-none focus:outline-oranged">
                    <option value=""> {{ $data->kategori->nama }} </option>
                    @foreach($kategoris as $kategori)
                    <option value="{{ $kategori->id }}" {{ old('id') == $kategori->id ? 'selected' : null }}>{{ $kategori->nama }}</option>
                    @endforeach
                </select>
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
                <x-input-label for="posisi" :value="__('Posisi')" />
                <select name="posisi" id="posisi" class="mb-3 mt-2 bg-black border-gray-300 w-full rounded-md text-lg outline-none focus:ring-oranged text-white active:outline-none focus:outline-oranged">
                    <option value="{{ $data->bagian->id }}"> {{ $data->bagian->nama }} </option>
                    @foreach($bagians as $bagian)
                    <option value="{{ $bagian->id }}" {{ old('id') == $bagian->id ? 'selected' : null }}>{{ $bagian->nama }}</option>
                    @endforeach
                </select>
            </div>

            <!-- SIZE MONITOR -->
            <div>
                <x-input-label for="size_monitor" :value="__('Size Monitor')" />
                <x-text-input id="size_monitor" class="block mt-1 w-full" type="text" name="size_monitor" value="{{ $data->size_monitor }}" autofocus />
                <x-input-error :messages="$errors->get('size_monitor')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="status" :value="__('Status')" />
                <select name="status" id="status" class="mb-3 mt-1 bg-black border-gray-300 w-full rounded-md text-lg outline-none focus:ring-oranged text-white active:outline-none focus:outline-oranged">
                    <option value="{{ $data->status }}">
                        @if ($data->status == 1)
                            Aktif
                        @elseif ($data->status == 0)
                            Non-aktif
                        @elseif ($data->status != 0 || 1)
                            lainnya
                        @endif
                    </option>
                    <option value=1>Aktif</option>
                    <option value=0>Non-aktif</option>
                </select>
            </div>

            <div>
                <x-input-label for="keterangan" :value="__('Keterangan')" />
                <textarea id="keterangan" class="bg-black rounded-md text-white font-montreal text-lg mt-1s w-full items-start text-left" name="keterangan" value="{{ $data->keterangan }}" rows="4" autofocus placeholder="Taruh keterangan tambahan di sini ya gaes ya...">
                    {{ $data->keterangan }}
                </textarea>
                <x-input-error :messages="$errors->get('keterangan')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4 px-4 uppercase rounded-lg font-space hover:bg-oranged hover:text-white border-4 border-oranged bg-white font-bold shadow-[6px_6px_0_0] shadow-oranged text-xl transition hover:shadow-none focus:outline-none focus:ring active:bg-oranged">
                        {{ __('Update') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-app-layout>
<x-app-layout title="Edit {{ $data->nama_user }}">
    <div class="mb-10"></div>
    <x-auth-card class="pb-20">
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="animate w-20 h-20 fill-vero text-vero" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('inventaris.update', $data->id) }}">
            @method('put')
            @csrf
            <!-- Name User -->
            <div>
                <x-input-label for="nama_user" :value="__('Nama User')" />
                <x-text-input id="nama_user" class="block mt-1 w-full" type="text" name="nama_user"
                    value="{{ $data->nama_user }}" autofocus placeholder="{{ $data->nama_user }}" />
                <x-input-error :messages="$errors->get('nama_user')" class="mt-2" />
            </div>

            <!-- Nama Bagian -->
            <div>
                <x-input-label for="bagian_id" :value="__('Bagian')" />
                <select name="bagian_id" id="bagian_id"
                    class="mb-3 mt-1 border-gray-300 w-full rounded-md text-lg outline-none focus:ring-vero text-black active:outline-none focus:outline-vero">
                    <option value="{{ $data->bagian->id }}"> {{ $data->bagian->nama }} </option>
                    @foreach ($bagians as $bagian)
                        <option value="{{ $bagian->id }}" {{ old('id') == $bagian->id ? 'selected' : null }}>
                            {{ $bagian->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <x-input-label for="kategori" :value="__('Kategori')" />
                <select name="kategori" id="kategori"
                    class="mb-3 mt-1 border-gray-300 w-full rounded-md text-lg outline-none focus:ring-vero text-black active:outline-none focus:outline-vero">
                    <option value="">{{ $data->kategori->nama }}</option>
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->id }}" {{ old('kategori_id') == $kategori->id ? 'selected' : null }}>
                            {{ $kategori->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Kode -->
            <div>
                <x-input-label for="kode" :value="__('Kode')" />
                <x-text-input id="kode" class="block mt-1 w-full" type="text" name="kode"
                    value="{{ $data->kode }}" autofocus placeholder="{{ $data->kode }}" />
                <x-input-error :messages="$errors->get('kode')" class="mt-2" />
            </div>

            <!-- Th Pembelian -->
            <div>
                <x-input-label for="th_pembelian" :value="__('Tahun Pembelian')" />
                <x-text-input id="th_pembelian" class="block mt-1 w-full" type="text" name="th_pembelian"
                    value="{{ $data->th_pembelian }}" autofocus placeholder="{{ $data->th_pembelian }}" />
                <x-input-error :messages="$errors->get('th_pembelian')" class="mt-2" />
            </div>

            <!-- Memory -->
            <div>
                <x-input-label for="memory" :value="__('Memory')" />
                <x-text-input id="memory" class="block mt-1 w-full" type="text" name="memory"
                    value="{{ $data->memory }}" autofocus placeholder="{{ $data->memory }}" />
                <x-input-error :messages="$errors->get('memory')" class="mt-2" />
            </div>

            <!-- SPEC -->
            <div>
                <x-input-label for="spec" :value="__('SPEC')" />
                <x-text-input id="spec" class="block mt-1 w-full" type="text" name="spec"
                    value="{{ $data->spec }}" autofocus placeholder="{{ $data->spec }}" />
                <x-input-error :messages="$errors->get('spec')" class="mt-2" />
            </div>

            <!-- Merk -->
            <div>
                <x-input-label for="merk" :value="__('Merk')" />
                <x-text-input id="merk" class="block mt-1 w-full" type="text" name="merk"
                    value="{{ $data->merk }}" autofocus placeholder="{{ $data->merk }}" />
                <x-input-error :messages="$errors->get('merk')" class="mt-2" />
            </div>

            <!-- POSISI -->
            <div>
                <x-input-label for="posisi" :value="__('Posisi')" />
                <select name="posisi" id="posisi"
                    class="mb-3 mt-1 border-gray-300 w-full rounded-md text-lg outline-none focus:ring-vero text-black active:outline-none focus:outline-vero">
                    <option value="{{ $data->bagian->id }}"> {{ $data->bagian->nama }} </option>
                    @foreach ($bagians as $bagian)
                        <option value="{{ $bagian->id }}" {{ old('id') == $bagian->id ? 'selected' : null }}>
                            {{ $bagian->nama }}</option>
                    @endforeach
                </select>
            </div>

            <!-- SIZE MONITOR -->
            <div>
                <x-input-label for="size_monitor" :value="__('Size Monitor')" />
                <x-text-input id="size_monitor" class="block mt-1 w-full" type="text" name="size_monitor"
                    value="{{ $data->size_monitor }}" autofocus placeholder="{{ $data->size_monitor }}" />
                <x-input-error :messages="$errors->get('size_monitor')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="status_id" :value="__('Status')" />
                <select name="status_id" id="status_id"
                    class="mb-3 mt-1 border-gray-300 w-full rounded-md text-lg outline-none focus:ring-vero text-black active:outline-none focus:outline-vero">
                    <option value="{{ $data->status->id }}">{{ $data->status->nama_status }}</option>
                    @foreach ($status as $st)
                        <option value="{{ $st->id }}" {{ old('id') == $st->id ? 'selected' : null }}>
                            {{ $st->nama_status }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <x-input-label for="keterangan" :value="__('Keterangan')" />
                <textarea id="keterangan" class="rounded-md text-black font-montreal text-lg mt-1 w-full" name="keterangan"
                    value="{{ $data->keterangan }}" autofocus placeholder="{{ $data->keterangan }}"">
                    {{ $data->keterangan }}
                </textarea>
                <x-input-error :messages="$errors->get('keterangan')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button
                    class="ml-4 px-4 uppercase rounded-lg font-space hover:bg-vero hover:text-white border-4 border-vero bg-white font-bold shadow-[6px_6px_0_0] shadow-vero text-xl transition hover:shadow-none focus:outline-none focus:ring active:bg-vero">
                    Update
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-app-layout>

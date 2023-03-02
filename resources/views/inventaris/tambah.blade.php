<x-app-layout title="Tambah Barang" class="mt-20">
    <x-auth-card class="pb-10">
        <div class="">
            <x-slot name="logo">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current mt-10 text-vero" />
                </a>
            </x-slot>
            <div class="z-50">
                <h1 class="text-center text-black font-basement font-bold text-2xl my-5">
                    Import Data
                </h1>
                <form method="post" enctype="multipart/form-data" class="flex space-x-5"
                    action="{{ route('inventaris.import') }}">
                    @csrf
                    <input type="file" name="file"
                        class="p-1 items-center rounded-md bg-transparent border border-black border-dashed" required />
                    <button type="submit"
                        class="px-4 uppercase rounded-lg font-space hover:bg-vero hover:text-white border-4 border-vero bg-white font-bold shadow-[6px_6px_0_0] shadow-vero text-xl transition hover:shadow-none focus:outline-none focus:ring active:bg-vero">Upload</button>
                </form>
            </div>

            <hr class="dark:background-white my-10 border-b border-solid border-vero" />

            {{-- Input Manual --}}
            <div class="">
                <h1 class="text-center font-basement font-bold mb-5 text-black text-2xl">
                    Input Data
                </h1>
                <form method="POST" action="{{ route('inventaris.store') }}">
                    @csrf
                    {{-- User --}}
                    <div>
                        <x-input-label for="nama_user" :value="__('User')" />
                        <x-text-input id="nama_user" class="block mt-1 w-full" type="text" name="nama_user"
                            :value="old('nama_user')" placeholder="Krido Pambudi B" required autofocus />
                        <x-input-error :messages="$errors->get('nama_user')" class="mt-2" />
                    </div>

                    {{-- Kategori --}}
                    <div>
                        <x-input-label for="kategori_id" :value="__('Kategori')" />
                        <select name="kategori_id" id="kategori_id"
                            class="mb-3 mt-1 border-gray-300 w-full rounded-md text-lg outline-none focus:ring-vero text-black active:outline-none focus:outline-vero">
                            <option value="">PILIH KATEGORI</option>
                            @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}"
                                    {{ old('kategori_id') == $kategori->id ? 'selected' : null }}>{{ $kategori->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Bagian --}}
                    <div>
                        <x-input-label for="bagian_id" :value="__('Bagian')" />
                        <select name="bagian_id" id="bagian_id"
                            class="mb-5 mt-1 border-gray-300 w-full rounded-md text-lg outline-none focus:ring-vero text-black active:outline-none focus:outline-vero">
                            <option value="">PILIH BAGIAN</option>
                            @foreach ($bagians as $bagian)
                                <option value="{{ $bagian->id }}"
                                    {{ old('bagian_id') == $bagian->id ? 'selected' : null }}>{{ $bagian->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Kode --}}
                    <div>
                        <x-input-label for="kode" :value="__('Kode')" />
                        <x-text-input id="kode" class="block uppercase mt-1 w-full" type="text" name="kode"
                            :value="old('kode')" required autofocus placeholder="VR-0001" />
                        <x-input-error :messages="$errors->get('kode')" class="mt-2" />
                    </div>

                    {{-- Th Pembelian --}}
                    <div>
                        <x-input-label for="th_pembelian" :value="__('Th. Pembelian')" />
                        <x-text-input id="th_pembelian" class="block mt-1 w-full" min="1976" max="2023"
                            type="text" name="th_pembelian" placeholder="{{ date('Y', strtotime(now())) }}"
                            :value="old('th_pembelian')" autofocus />
                        <x-input-error :messages="$errors->get('th_pembelian')" class="mt-2" />
                    </div>

                    {{-- Memory --}}
                    <div>
                        <x-input-label for="memory" :value="__('Memory')" />
                        <x-text-input id="memory" class="block mt-1 w-full" type="text" name="memory"
                            :value="old('memory')" required autofocus placeholder="Memory" />
                        <x-input-error :messages="$errors->get('ram')" class="mt-2" />
                    </div>

                    {{-- CPU --}}
                    <div>
                        <x-input-label for="spec" :value="__('Spec')" />
                        <x-text-input id="spec" class="block mt-1 w-full" type="text" name="spec"
                            :value="old('spec')" placeholder="Intel Core i9 9900 KF" required autofocus />
                        <x-input-error :messages="$errors->get('spec')" class="mt-2" />
                    </div>

                    {{-- Merk --}}
                    <div>
                        <x-input-label for="merk" :value="__('Merk')" />
                        <x-text-input id="merk" class="block mt-1 w-full" type="text" name="merk"
                            :value="old('merk')" placeholder="MERK" required autofocus />
                        <x-input-error :messages="$errors->get('merk')" class="mt-2" />
                    </div>

                    {{-- Posisi --}}
                    <div>
                        <x-input-label for="posisi" :value="__('Posisi Item')" />
                        <select name="posisi" id="posisi"
                            class="mb-3 mt-1 border-gray-300 w-full rounded-md text-lg outline-none focus:ring-vero text-black active:outline-none focus:outline-vero">
                            <option value="">PILIH POSISI</option>
                            @foreach ($bagians as $bagian)
                                <option value="{{ $bagian->id }}"
                                    {{ old('bagian_id') == $bagian->id ? 'selected' : null }}>{{ $bagian->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Size Monitor --}}
                    <div>
                        <x-input-label for="size_monitor" :value="__('Size Monitor')" />
                        <x-text-input id="size_monitor" class="block mt-1 w-full" type="text" name="size_monitor"
                            :value="old('size_monitor')" placeholder="69 Inc" autofocus />
                        <x-input-error :messages="$errors->get('size_monitor')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="status_id" :value="__('Status')" />
                        <select name="status_id" id="status_id"
                            class="mb-3 mt-1 border-gray-300 w-full rounded-md text-lg outline-none focus:ring-vero text-black active:outline-none focus:outline-vero">
                            <option value="">PILIH STATUS</option>
                            @foreach ($status as $st)
                                <option value="{{ $st->id }}"
                                    {{ old('status_id') == $st->id ? 'selected' : null }}>{{ $st->nama_status }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Keterangan --}}
                    <div>
                        <x-input-label for="keterangan" :value="__('Keterangan')" />
                        <textarea id="keterangan" class="rounded-md text-black font-montreal text-lg mt-1 w-full" name="keterangan"
                            value="{{ old('keterangan') }}" autofocus placeholder="Barang ini blablabla..."></textarea>
                        <x-input-error :messages="$errors->get('keterangan')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button
                            class="ml-4 px-4 uppercase rounded-lg font-space hover:bg-vero hover:text-white border-4 border-vero bg-white font-bold shadow-[6px_6px_0_0] shadow-vero text-xl transition hover:shadow-none focus:outline-none focus:ring active:bg-vero">
                            {{ __('Tambah Item') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </x-auth-card>
</x-app-layout>

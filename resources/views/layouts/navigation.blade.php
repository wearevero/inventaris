<nav x-data="{ open: false }" class="bg-white/30  text-white backdrop-blur-sm border-b border-black sticky z-10 top-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                         <x-application-logo class="block animate animate-bounce h-9 w-auto fill-vero hover:text-gray-200 text-gray-800 dark:text-rose-500" />
                    </a>
                </div>
                <div class="hidden text-black space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Hello') }}
                    </x-nav-link>

                    {{-- INVENTARIS MENU --}}
                    <x-nav-link :href="route('inventaris.index')" :active="request()->routeIs('inventaris.index')">
                        {{ __('Inventaris') }}
                    </x-nav-link>

                    {{-- MASTER DROPDOWN --}}
                    <div class="hidden font-basement space-x-3 sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="left" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center tracking-wider px-3 py-2 border-2 border-transparent uppercase text-sm leading-4 font-medium rounded-md text-gray-700 border-vero bg-transparent hover:text-vero focus:outline-none transition ease-in-out duration-150">
                                    <div>MASTER</div>
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>
                            
                            <x-slot name="content">
                                <x-dropdown-link class="divide-y text-vero" :href="route('bagian.index')" >
                                    {{ __('Bagian') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('kategori.index')">
                                    {{ __('Kategori') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>

                    {{-- TEAM SECTION --}}
                    <x-nav-link :href="route('team.index')" :active="request()->routeIs('team.index')">
                        {{ __('meet our team') }}
                    </x-nav-link>
                </div>
            </div>


            <!-- Settings Dropdown -->
            <div class="hidden font-basement space-x-3 sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="left" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center tracking-wider px-3 py-2 border-2 border-transparent uppercase text-sm leading-4 font-medium rounded-md text-gray-700 border-vero bg-transparent hover:text-vero focus:outline-none transition ease-in-out duration-150">
                            <div>Tambah</div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('inventaris.tambah')">
                            {{ __('Tambah Barang') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('kategori.index')">
                            {{ __('Tambah Kategori') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('bagian.tambah')">
                            {{ __('Tambah Bagian') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>

                {{-- end --}}
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">

                        <button class="inline-flex tracking-wider uppercase items-center px-3 py-2 border-2 border-transparent text-sm leading-4 font-medium rounded-md text-gray-700 border-vero bg-transparent hover:text-vero focus:outline-none transition ease-in-out duration-150">
                            <div>login as {{ Auth::user()->name }}</div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>

                {{-- dropdown for adding items --}}
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-response-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>

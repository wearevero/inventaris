<x-guest-layout title="Login">
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-vero text-vero" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-black text-vero shadow-sm focus:ring-vero dark:focus:ring-vero dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-lg text-gray-700 font-montreal">{{ __('Please, remember me baby!') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-gray-700 font-montreal text-xl hover:text-black rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-vero dark:focus:ring-offset-gray-800"
                    href="{{ route('register') }}">
                    {{ __('Wanna join?') }}
                </a>

                <x-primary-button
                    class="ml-3 px-4 py-2 uppercase rounded-lg font-montreal hover:bg-vero hover:text-white border-4 border-vero bg-white font-bold shadow-[4px_4px_0_0] shadow-vero text-lg transition hover:shadow-none focus:outline-none focus:ring active:bg-vero active:">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

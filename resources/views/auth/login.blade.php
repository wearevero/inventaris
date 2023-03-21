<x-guest-layout title="Login">
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-geistWhite" />
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
                    required />
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
                        class="rounded border-geistWhite bg-geistForeground text-geistWhite focus:ring-geistWhite focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-md text-geistWhite font-montreal">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="text-geistWhite font-montreal text-lg hover:text-slate-500 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-geistWhite focus:ring-offset-gray-800"
                    href="{{ route('register') }}">
                    {{ __('Register') }}
                </a>

                <x-primary-button
                    class="ml-3 rounded-xl font-montreal hover:bg-geistWhite hover:text-geistForeground hover:transition hover:ease-in-out border border-geistWhite text-geistWhite bg-gray-500/10 text-lg transition focus:outline-none focus:ring active:bg-geistWhite">
                    {{ __('Sign in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

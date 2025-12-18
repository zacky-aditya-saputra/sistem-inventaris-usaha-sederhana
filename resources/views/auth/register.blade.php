<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
<div class="mb-6 text-center">
            <h2 class="text-4xl font-extrabold text-purple-700">INVENTARUS</h2>
            <p class="text-gray-500 text-sm">Masuk untuk mengelola aset anda</p>
        </div>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full  border-gray-300 focus:border-purple-500 focus:ring-purple-500 rounded-lg shadow-sm" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full  border-gray-300 focus:border-purple-500 focus:ring-purple-500 rounded-lg shadow-sm" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full  border-gray-300 focus:border-purple-500 focus:ring-purple-500 rounded-lg shadow-sm"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full  border-gray-300 focus:border-purple-500 focus:ring-purple-500 rounded-lg shadow-sm"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-sm text-purple-600 hover:text-purple-800 font-medium hover:underline" href="{{ route('login') }}">
                {{ __('Sudah terdaftar?') }}
            </a>

            <x-primary-button class="ms-3 bg-purple-700 hover:bg-purple-800 focus:bg-purple-800 active:bg-purple-900">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

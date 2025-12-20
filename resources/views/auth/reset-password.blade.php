<x-guest-layout>
    <div class="mb-6 text-center">
        <h2 class="text-4xl font-extrabold text-purple-700">INVENTARUS</h2>
        <p class="text-gray-500 text-sm">Buat kata sandi baru untuk akun Anda</p>
    </div>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div>
            <x-input-label for="email" value="Email" />
            <x-text-input id="email" class="block mt-1 w-full border-gray-300 focus:border-purple-500 focus:ring-purple-500 rounded-lg shadow-sm" 
                                type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" value="Kata Sandi Baru" />
            <x-text-input id="password" class="block mt-1 w-full border-gray-300 focus:border-purple-500 focus:ring-purple-500 rounded-lg shadow-sm" 
                                type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" value="Konfirmasi Kata Sandi" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full border-gray-300 focus:border-purple-500 focus:ring-purple-500 rounded-lg shadow-sm"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-6">
            <x-primary-button class="w-full justify-center py-3 bg-purple-700 hover:bg-purple-800 focus:bg-purple-800 active:bg-purple-900">
                {{ __('Reset Kata Sandi') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
<x-guest-layout>
    <div class="mb-6 text-center">
            <h2 class="text-4xl font-extrabold text-purple-700">INVENTARUS</h2>
            <p class="text-gray-500 text-sm">Masuk untuk mengelola aset anda</p>
        </div>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Lupa kata sandi? Masukkan email Anda, dan kami akan mengirimkan tautan untuk membuat kata sandi baru.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full  border-gray-300 focus:border-purple-500 focus:ring-purple-500 rounded-lg shadow-sm" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-sm text-purple-600 hover:text-purple-800 font-medium hover:underline" href="{{ route('login') }}">
                {{ __('Kembali ke Halaman Login') }}
            </a>

            <x-primary-button class="ms-3 bg-purple-700 hover:bg-purple-800 focus:bg-purple-800 active:bg-purple-900">
                {{ __('Link Reset Sandi') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

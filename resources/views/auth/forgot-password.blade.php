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
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

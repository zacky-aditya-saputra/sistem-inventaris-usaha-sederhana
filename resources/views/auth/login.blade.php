<x-guest-layout>
    <div class="flex flex-col items-center justify-center">

        <div class="flex flex-col items-center justify-center mb-6 text-center">
            <img src="{{ asset('logoInventarus.png') }}" alt="Logo Inventarus"
                class="block mx-auto w-1/3 h-auto object-contain">

            <h2 class="text-4xl font-extrabold text-purple-700 mt-2">INVENTARUS</h2>
            <p class="text-gray-500 text-sm">Masuk untuk mengelola aset anda</p>
        </div>

        <!-- Form Login -->
        <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg border border-gray-100">

            <!-- (Pesan error/sukses) -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-gray-700 font-semibold" />
                    <x-text-input id="email"
                        class="block mt-1 w-full border-gray-300 focus:border-purple-500 focus:ring-purple-500 rounded-lg shadow-sm"
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                        placeholder="nama@email.com" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="text-gray-700 font-semibold" />

                    <x-text-input id="password"
                        class="block mt-1 w-full border-gray-300 focus:border-purple-500 focus:ring-purple-500 rounded-lg shadow-sm"
                        type="password" name="password" required autocomplete="current-password"
                        placeholder="••••••••" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-purple-600 shadow-sm focus:ring-purple-500"
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Ingat Saya') }}</span>
                    </label>
                </div>

                <!-- Tombol" -->
                <div class="flex items-center justify-between mt-6">
                    <a class="text-sm text-purple-600 hover:text-purple-800 font-medium hover:underline"
                        href="{{ route('register') }}">
                        {{ __('Belum punya akun? Daftar') }}
                    </a>

                    <div class="flex items-center gap-4">
                        @if (Route::has('password.request'))
                            <a class="text-sm text-gray-500 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Lupa Password?') }}
                            </a>
                        @endif

                        <x-primary-button
                            class="ms-3 bg-purple-700 hover:bg-purple-800 focus:bg-purple-800 active:bg-purple-900">
                            {{ __('Masuk') }}
                        </x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

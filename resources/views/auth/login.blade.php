<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="flex bg-[#585654] w-10/12 rounded-lg p-9" style="height: 80vh;">
        <div class="w-6/12 flex flex-col items-center justify-center">
            <img class="w-1/2" src="/assets/login.png" alt="">
            <p class="text-2xl font-bold text-white">Open Library <br>Telkom University</p>
        </div>
        <div class="w-6/12">
            <div class="flex w-full bg-white rounded-t-lg">
                <a href="/register" class="w-1/2">
                    <button class="w-full text-center bg-[#EDEDED] border-2 font-bold py-3 rounded-tl-lg">
                        Sign Up
                    </button>
                </a>
                <a href="/login" class="w-1/2">
                    <button class="w-full text-center font-bold py-3 rounded-tr-lg">
                        Login
                    </button>
                </a>
            </div>
            <form class="w-full text-sm  bg-white py-5 px-10 rounded-b-lg" method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Username -->
                <div>
                    <x-input-label for="username" :value="__('Username / SSO')" />
                    <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')"
                        required autofocus autocomplete="username sso" />
                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-3">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="flex justify-between items-center mt-3">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot password') }}
                    </a>
                    @endif
                </div>

                <div class="mt-3">
                    <x-primary-button class="w-full">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>

                <div class="flex items-center justify-center font-medium mt-2 gap-1">
                    <p>Belum mempunyai akun?</p>
                    <a class="text-sm hover:text-gray-900 text-[#B22222] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('register') }}">
                        {{ __('Sign up') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

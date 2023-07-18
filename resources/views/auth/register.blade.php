<x-guest-layout>
    <div class="flex bg-[#585654] w-10/12 rounded-lg p-9">
        <div class="w-1/2 flex flex-col items-center justify-center">
            <img class="w-1/2" src="/assets/login.png" alt="">
            <p class="text-2xl font-bold text-white">Open Library <br>Telkom University</p>
        </div>
        <div class="w-1/2">
            <div class="flex w-full bg-white rounded-t-lg">
                <a href="/register" class="w-1/2">
                    <button class="w-full text-center font-bold py-3">
                        Sign Up
                    </button>
                </a>
                <a href="/login" class="w-1/2">
                    <button class="w-full text-center bg-[#EDEDED] border-2 font-bold py-3 rounded-tr-lg">
                        Login
                    </button>
                </a>
            </div>
            <form class="w-full text-sm  bg-white py-5 px-10 rounded-b-lg" method="POST"
                action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <!-- <x-input-label for="name" :value="__('Name')" /> -->
                    <x-text-input id="name" class="block text-sm mt-1 w-full" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" placeholder="Username" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>


                <!-- Password -->
                <div class="mt-3">
                    <!-- <x-input-label for="password" :value="__('Password')" /> -->

                    <x-text-input id="password" class="block text-sm mt-1 w-full" type="password" name="password"
                        required autocomplete="new-password" placeholder="Password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Nomor Telepon -->
                <div class="mt-3">
                    <!-- <x-input-label for="notelepon" :value="__('Email')" /> -->
                    <x-text-input id="notelepon" class="block text-sm mt-1 w-full" type="text" name="notelepon"
                        :value="old('notelepon')" required autocomplete="notelepon" placeholder="Nomor Telepon" />
                    <x-input-error :messages="$errors->get('notelepon')" class="mt-2" />
                </div>

                <!-- Alamat -->
                <div class="mt-3">
                    <!-- <x-input-label for="alamat" :value="__('Email')" /> -->
                    <x-text-input id="alamat" class="block text-sm mt-1 w-full" type="text" name="alamat"
                        :value="old('alamat')" required autocomplete="alamat" placeholder="Alamat" />
                    <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                </div>

                <!-- Tipe Akun -->
                <div class="mt-3">
                    <select class="w-full text-sm border-gray-300 rounded-sm" name="tipemember" id="tipemember">
                        <option>Pilih Tipe Member</option>
                        <option class="hover:bg-[#FF4500]" value="Alumni Telkom University">Alumni Telkom University
                        </option>
                        <option value="Lemdikti YPT">Lemdikti YPT</option>
                        <option value="Perguruan Tinggi Asuh">Perguruan Tinggi Asuh</option>
                    </select>
                </div>

                <!-- Email-->
                <div class="mt-3">
                    <!-- <x-input-label for="email" :value="__('Confirm Password')" /> -->

                    <x-text-input id="email" class="block text-sm mt-1 w-full" type="email" name="email" required
                        autocomplete="email" placeholder="@gmail.com" />

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- KTP -->
                <div class="mt-3">
                    <x-input-label for="ktp" :value="__('KTP')" />
                    <div class="border-gray-300 border text-sm shadow-sm p-2 rounded-md mt-1">
                        <input class="active:border-0" name="ktp" type="file">
                    </div>
                    <x-input-label for="ktp" :value="__('Format : jpg, jpeg, png, pdf;  Maksimal size : 2 MB')" />
                </div>

                <!-- Ijasah -->
                <div class="mt-3">
                    <x-input-label for="ijasah" :value="__('Ijasah')" />
                    <div class="border-gray-300 border text-sm shadow-sm p-2 rounded-md mt-1">
                        <input class="active:border-0" name="ijasah" type="file">
                    </div>
                    <x-input-label for="ijasah" :value="__('Format : jpg, jpeg, png, pdf;  Maksimal size : 2 MB')" />
                </div>

                <div
                    class="flex items-center gap-2 mt-3 bg-[#F5F5F5] w-7/12 pl-4 py-4 border rounded-lg border-[#938C8C]">
                    <input name="imnotrobot" type="checkbox">
                    <label for="imnotrobot"> I'm, not robot</label>
                </div>

                <x-primary-button class="mt-3 w-full">
                    {{ __('Sign Up') }}
                </x-primary-button>

                <div class="flex items-center justify-center font-medium mt-2">
                    <a class="text-sm hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('login') }}">
                        {{ __('Sudah Mempunyai Akun? Login') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

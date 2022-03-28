<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            
            <div class="mt-4">
                <x-label for="nis" :value="__('Nis')"></x-label>
                <x-input id="nis" class="block mt-1 w-full"
                        type="text"
                        name="nis"
                        maxlength="10"
                        :value="old('nis' ?: '')"
                        required />
            </div>
            
            
            <div class="mt-4">
                <x-label for="nis">Nisn</x-label>
                <x-input id="nisn" class="block mt-1 w-full"
                        type="text"
                        name="nisn"
                        maxlength="10"
                        :value="old('nisn' ?: '')"        
                        required />
            </div>
            

            
            <div class="mt-4">
                <x-label for="tanggal_lahir">Tanggal Lahir</x-label>
                <x-input id="tanggal_lahir" class="block mt-1 w-full"
                        type="date"
                        name="tanggal_lahir"
                        :value="old('tanggal_lahir' ?: '')"
                        required />
            </div>


            <!-- Gender -->
            <div class="mt-4">
                <x-label for="gender">Gender</x-label>
                <select name="gender" id="gender" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select >
            </div>

            {{-- Agama--}}
            <div class="mt-4">
                <x-label for="agama" class="mb-2">Agama</x-label>
                <select name="agama" id="agama" class="form-control rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value="Islam" selected >Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>

                </select>
            </div>

            {{-- Phone Number --}}

            <div class="mt-4">
                <x-label for="no_hp">Nomor Hp</x-label>
                <x-input id="no_hp" class="block mt-1 w-full"
                        type="tel"
                        name="no_hp"
                        :value="old('no_hp' ?: '')"
                        required />
            </div>

            {{-- Alamat --}}
            <div class="mt-4">
                <x-label for="alamat">Alamat</x-label>
                <textarea class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="alamat" id="alamat" cols="40" rows="5" ></textarea>
            </div>

            
            

            
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

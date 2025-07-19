<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" novalidate class="font-orbitron">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre:')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email:')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{--Rol de Cuenta--}}
        <div class="mt-4">
            <x-input-label for="rol" :value="__('Tipo de Cuenta:')" />
            <select id="rol" name="rol" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full font-orbitron">
                <option value=""> --- Selecciona un tipo de Cuenta ---</option>
                <option value="1">Developer - Obtener empleo</option>
                <option value="2">Recluter - Publicar Empleos</option>
            </select>
            <x-input-error :messages="$errors->get('rol')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password:')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar Password:')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex justify-between mt-4">
            <x-link
                :href="route('login')"
            >
                Iniciar Sesión
            </x-link>

            <x-link
                :href="route('password.request')"
            >
                Olvide Password
            </x-link>
        </div>
        <x-primary-button class="w-full justify-center mt-5">
            {{ __('Register') }}
        </x-primary-button>
    </form>
</x-guest-layout>

<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('¿Olvidaste tu password? Coloca tu email de registro para recuperarla.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" novalidate class="font-orbitron">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="flex justify-between mt-4 mb-4">
            <x-link
                :href="route('login')"
            >
                Iniciar Sesión
            </x-link>

            <x-link
                :href="route('register')"
            >
                Crear Cuenta
            </x-link>
        </div>
        <x-primary-button class="w-full justify-center" >
            {{ __('Enviar email de recuperación') }}
        </x-primary-button>
    </form>
</x-guest-layout>

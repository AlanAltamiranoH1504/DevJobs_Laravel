<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 font-orbitron text-center">
        {{ __('Es necesario confirmar tu cuenta antes de continuar. Revisa tu email y presiona sobre el enlace de confirmacion.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 font-orbitron text-center">
            {{ __('Hemos enviado un nuevo email de confirmación a la cuenta que colocaste en el registro.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Enviar enlace de verificación') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class=" font-orbitron text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Salir') }}
            </button>
        </form>
    </div>
</x-guest-layout>

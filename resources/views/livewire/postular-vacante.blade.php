<div class="bg-gray-100 px-5 my-10 flex justify-center flex-col items-center">
    <h3 class="text-center text-2xl font-bold my-4">Postularme a esta Vacante</h3>

    <form wire:submit.prevent="postularme" class="w-96 mt-5 space-y-5 mb-5 font-orbitron">
        <div class="mt-4 space-y-4">
            <x-input-label for="cv" :value="__('Curriculum o Hoja de Vida (PDF)')"/>
            <x-text-input id="cv" type="file" wire:model="cv" accept=".pdf" class="block mt-1 w-full"/>
        </div>

        <x-input-error :messages="$errors->get('cv')" class="mt-2" />

        <x-primary-button class="w-full justify-center mt-5 font-orbitron">
            {{ __('Postularme') }}
        </x-primary-button>
    </form>
</div>

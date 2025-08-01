<form class="md:w-1/2 font-orbitron space-y-5" wire:submit.prevent="actualizarVacante" novalidate>
    <div>
        <x-input-label for="titulo" :value="__('Titulo de Vacante:')" />
        <x-text-input id="titulo" class="block mt-1 w-full" type="text" wire:model="titulo" :value="old('titulo')" required autofocus autocomplete="titulo" placeholder="Titulo de vacante"/>
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="salario" :value="__('Salario Mensual:')" />
        <select id="salario" wire:model="salario" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full font-orbitron">
            <option value=""> --- Selecciona un salario ---</option>
            @foreach($salarios as $salario)
                <option class="w-full" value="{{$salario->id}}">{{$salario->salario}}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="categoria" :value="__('Categoria:')" />
        <select id="categoria" wire:model="categoria" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full font-orbitron">
            <option value=""> --- Selecciona una categoria ---</option>
            @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="empresa" :value="__('Empresa:')" />
        <x-text-input id="empresa" class="block mt-1 w-full" type="text" wire:model="empresa" :value="old('empresa')" required autofocus autocomplete="empresa" placeholder="Empresa contratadora"/>
        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="ultimo_dia" :value="__('Ultimo dia para postularse:')" />
        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" wire:model="ultimo_dia" :value="old('ultimo_dia')" required autofocus autocomplete="ultimo_dia"/>
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripción del puesto:')" />
        <textarea id="descripcion"  wire:model="descripcion" placeholder="Descripcion general del puesto" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" rows="8"></textarea>
        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen de Vacante:')" />
        <x-text-input id="imagen" accept="image/*" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" type="file" wire:model="imagen" required autofocus placeholder="Imagen de vacante"/>
        <div class="my-5 w-80">
            @if($imagen)
                Imagen:
                <img src="{{asset('storage/vacantes'."/".$imagen)}}">
            @endif
        </div>
        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
    </div>
    <x-primary-button class="w-full justify-center mt-5 font-orbitron">
        {{ __('Actualizar Vacante') }}
    </x-primary-button>
</form>

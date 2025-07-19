<form class="md:w-1/2 font-orbitron space-y-5">
    <div>
        <x-input-label for="titulo" :value="__('Titulo de Vacante:')" />
        <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')" required autofocus autocomplete="titulo" placeholder="Titulo de vacante"/>
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="salario" :value="__('Salario Mensual:')" />
        <select id="salario" name="salario" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full font-orbitron">
            <option value=""> --- Selecciona un salario ---</option>
            @foreach($salarios as $salario)
                <option class="w-full" value="{{$salario->id}}">{{$salario->salario}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <x-input-label for="categoria" :value="__('Categoria:')" />
        <select id="categoria" name="categoria" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full font-orbitron">
            <option value=""> --- Selecciona una categoria ---</option>
            @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <x-input-label for="empresa" :value="__('Empresa:')" />
        <x-text-input id="empresa" class="block mt-1 w-full" type="text" name="empresa" :value="old('empresa')" required autofocus autocomplete="empresa" placeholder="Empresa contratadora"/>
        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="ultimo_dia" :value="__('Ultimo dia para postularse:')" />
        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" name="ultimo_dia" :value="old('ultimo_dia')" required autofocus autocomplete="ultimo_dia"/>
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripción del puesto:')" />
        <textarea id="descripcion"  name="descripion" placeholder="Descripcion general del puesto" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" rows="8"></textarea>
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen de Vacante:')" />
        <x-text-input id="imagen" accept="image/*" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" type="file" name="imagen" required autofocus placeholder="Imagen de vacante"/>
    </div>
    <x-primary-button class="w-full justify-center mt-5 font-orbitron">
        {{ __('Crear Vacante') }}
    </x-primary-button>
</form>

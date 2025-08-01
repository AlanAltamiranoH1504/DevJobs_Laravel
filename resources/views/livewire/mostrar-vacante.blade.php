<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-gray-800 my-3">
            {{$vacante->titulo}}
        </h3>
        <div class="md:grid md:grid-cols-2 bg-gray-100 p-4 shadow-sm rounded-md my-8">
            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Empresa: <span class="normal-case font-normal">{{$vacante->empresa}}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Último Día de Postuluación: <span class="normal-case font-normal">{{\Carbon\Carbon::parse($vacante->ultimo_dia)->format("d/m/Y")}}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Categoria: <span class="normal-case font-normal">{{$vacante->categoria->categoria}}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Salario: <span class="normal-case font-normal">{{$vacante->salario->salario}}</span>
            </p>
        </div>
    </div>
    <div class="md:grid md:grid-cols-6 gap-4">
        <div class="md:col-span-2">
            <img src="{{asset('storage/vacantes/'.$vacante->imagen)}}">
        </div>
        <div class="md:col-span-4">
            <h2 class="text-2xl font-bold mb-5">Descripción del Puesto</h2>
            <p>{{$vacante->descripcion}}</p>
        </div>
    </div>

    <div class="mt-5 bg-gray-50 border border-dashed p-5 text-center rounded-md">
        @auth()
            @if(auth()->user()->rol === 1)
                <livewire:postular-vacante :vacante="$vacante"></livewire:postular-vacante>
            @endif
        @endauth

        @guest()
            <a href="{{route('register')}}" class="w-full p-2 rounded-lg text-black">¿Deseas aplicar a esta vacante? <span class="text-indigo-700 font-black">Obten una cuenta y aplica a esta vacante y otras</span></a>
        @endguest
    </div>
</div>

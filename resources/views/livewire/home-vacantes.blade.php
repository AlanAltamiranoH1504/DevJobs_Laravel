<div>
    <livewire:filtrar-vacantes/>
    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-bold text-4xl text-gray-700 text-center mb-12">Vacantes Disponibles</h3>

            <div class="bg-white shadow-sm rounded-lg p-6 space-y-5 divide-y divide-gray-500">
                @if(count($vacantes) > 0)
                    @foreach($vacantes as $vacante)
{{--                        @dd($vacante)--}}
                        <div class="md:flex md:justify-between md:items-center py-5">
                            <div class="md:flex-1">
                                <a href="/vacantes/{{$vacante->id}}" class="text-3xl text-gray-800 font-bold hover:text-indigo-600 ">{{$vacante->titulo}}</a>
                                <p class="text-base font-semibold text-gray-600 mb-1">{{$vacante->empresa}}</p>
                                <p class="text-sm font-semibold text-gray-600">Ultimo dia para postularse: {{\Carbon\Carbon::parse($vacante->ultimo_dia)->format("d/m/Y")}}</p>
                            </div>
                            <div class="mt-5 md:mt-0">
                                <a class="bg-indigo-800 block text-center px-4 py-2 rounded-lg font-bold hover:bg-indigo-700 transition-colors duration-500 text-white" href="/vacantes/{{$vacante->id}}">Más Detalles</a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-sm text-center font-semibold">No existen vacantes disponibles</p>
                @endif
            </div>
        </div>
    </div>
</div>

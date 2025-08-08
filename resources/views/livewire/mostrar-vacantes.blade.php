<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        @if(count($vacantes) > 0)
            @foreach($vacantes as $vacante)
                <div class="p-6 text-gray-900 border border-gray-200 md:flex md:justify-between md:items-center">
                    <div class="leading-10">
                        <a href="/vacantes/{{$vacante->id}}" class="text-xl font-bold">
                            {{$vacante->titulo}}
                        </a>
                        <p class="text-sm text-gray-600 font-bold">{{$vacante->empresa}}</p>
                        <p class="text-sm text-gray-500">Ultimo dia de
                            recepción: {{\Carbon\Carbon::parse($vacante->ultimo_dia)->format("d/m/Y")}}</p>
                    </div>
                    <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                        <a href="/candidatos/vacante/{{$vacante->id}}"
                           class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase flex justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z"/>
                            </svg>
                            Candidatos
                        </a>
                        <a href="{{route('vacantes.edit', $vacante->id)}}"
                           class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase flex justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125"/>
                            </svg>

                            Editar</a>
                        <button wire:click="$dispatch('prueba', { id: {{$vacante->id}} })"
                           class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase flex justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/>
                            </svg>
                            Eliminar</button>

                    </div>
                </div>
            @endforeach
        @else
            <div class="p-6 text-gray-900 border border-gray-200 md:flex md:justify-between md:items-center">
                <p>No tienes vacantes publicadas</p>
            </div>
        @endif
    </div>
    <div class="flex justify-center mt-10">
        {{$vacantes->links()}}
    </div>
    @push('scripts')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @endpush
</div>

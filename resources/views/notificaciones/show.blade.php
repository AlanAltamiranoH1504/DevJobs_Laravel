<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl text-center mb-10 font-bold font-orbitron">Últimas Notificaciones</h1>
                    @if($notificaciones)
                        @foreach($notificaciones as $notificacion)
                            <div class="p-5 border border-gray-200 rounded-lg border-2 flex gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                                </svg>
                                <div class="flex flex-col">
                                    <p>Tienes un nuevo candidato en: <span class="text-indigo-600 font-bold">{{$notificacion->data["nombre_vacante"]}}</span></p>
                                    <p><span class="text-indigo-600 font-bold capitalize">{{$notificacion->created_at->diffForHumans()}}</span></p>
                                    <div class="mt-5 w-full">
                                        <a href="" class="font-bold uppercase p-2 border rounded-lg text-white bg-indigo-600 hover:bg-indigo-700 transition-colors duration-500">Candidatos</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="text-center text-gray-600 text-xl uppercase">No tienes notificaciones actualmente</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

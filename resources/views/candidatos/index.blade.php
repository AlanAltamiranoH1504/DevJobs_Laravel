<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Candidatos de Vacante') }} - {{count($vacante->candidatos)}} candidatos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 font-fjalla">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl text-center mb-10 font-bold font-orbitron">Candidatos
                        - {{$vacante->titulo}}</h1>
                    <div class="md:flex md:justify-center p-5">
                        <ul class="divide-y divide-gray-300 w-full">
                            @if(count($vacante->candidatos) > 0)
                                @foreach($vacante->candidatos as $candidato)
                                    <li class=" flex items-center">
                                        <div class="flex-1">
                                            <pre>
                                                <p class="text-xl font-medium text-gray-800">{{$candidato->user->name}}</p>
                                                <p class="text-sm text-gray-600">{{$candidato->user->email}}</p>
                                                <p class="text-sm text-gray-600">Dia que se postulo: {{$candidato->created_at->diffForHumans()}}</p>
                                            </pre>
                                        </div>
                                        <div>
                                            <a href="{{asset($candidato->cv)}}"
                                               class="inline-flex items-center shadow-sm px-5 py-2 border border-indigo-800 leading-5 font-medium font-bold uppercase rounded-md text-white bg-indigo-800 hover:bg-indigo-600 transition-colors duration-500 font-bold">Ver
                                                CV</a>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                <p class="p-3 text-center text-sm font-semibold">La vacante no cuenta con candidatos</p>
                            @endif
                        </ul>
                        {{--                        <livewire:crear-vacante></livewire:crear-vacante>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

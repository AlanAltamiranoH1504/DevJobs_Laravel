    @php
        $clases="text-sm text-gray-600 hover:text-gray-900 font-orbitron rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
    @endphp
<a {{$attributes->merge(['class' => $clases])}}>
    {{$slot}}
</a>

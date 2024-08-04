<x-app>
    <x-slot:title>Projects</x-slot>
        <x-slot:pageTitle>Projects</x-slot>


            <h2 class="text-lg font-bold mb-4">{{ $id->title }}</h2>
            <p class="text-gray-600 mb-4">Organization: {{ $id->organization }}</p>
            <p class="text-gray-600 mb-4">Description: {{ $id->description }}</p>
            <p class="text-gray-600">Duration: {{ $id->duration }}</p>
            <p class="text-gray-600 mb-4">Tags: {{ $id->tags }}</p>
            <a href="/project"
                class="underline text-blue-500 hover:text-blue-700">Return</a>


</x-app>
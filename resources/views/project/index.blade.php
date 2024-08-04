<x-app>
    <x-slot:title>Projects</x-slot>
        <x-slot:pageTitle>Projects</x-slot>

            <div class="py-6 grid grid-cols-2 gap-6">
                @foreach ($projects as $project)
                <div class="bg-white rounded-lg shadow-md p-4">
                    <h2 class="text-lg font-bold mb-4">{{ $project->title }}</h2>
                    <p class="text-gray-600 mb-4">Organization: <strong>{{ $project->organization }}</strong></p>
                    <p class="text-gray-600 mb-8">Description: {{ Str::limit($project->description, 50) }}</p>
                    <p class="text-gray-600">Duration: {{ $project->duration }}</p>
                    <p class="text-gray-600 mb-6">Tags: {{ $project->tags }}</p>
                    <a href="/project/{{ $project->id }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</a>
                </div>
                @endforeach
            </div>

</x-app>
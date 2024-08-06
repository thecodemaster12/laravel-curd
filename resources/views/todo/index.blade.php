<x-app>
    <x-slot:title>Todo</x-slot>
        <x-slot:pageTitle>Todo</x-slot>

        <div class="shadow-md p-4 ">
            <form action="/todo" method="post" class="flex flex-col gap-4">
                @csrf
                <div class="flex flex-col gap-2">
                    <label for="title">Title:</label>
                    <input class="border p-2 rounded-md" type="text" name="title" placeholder="Title" required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="author">Author:</label>
                    <input class="border p-2 rounded-md" type="text" name="author" placeholder="Name" required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="description">Description:</label>
                    <textarea class="border p-2 rounded-md" name="body" id="" cols="30" rows="5"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
            </form>
        </div>

            <div class="py-8 grid grid-cols-3 gap-6">
                @foreach ($todos as $todo)
                <div class="bg-white rounded-lg shadow-md p-4">
                    <h2 class="text-lg font-bold mb-4">{{ $todo->title }}</h2>
                    <p class="text-gray-600 mb-8">Description: {{ Str::limit($todo->body, 50) }}</p>
                    <p class="text-gray-600 mb-6">Tags: {{ $todo->author }}</p>
                    <p class="text-gray-600 mb-6">Updated at: {{ $todo->updated_at }}</p>
                    <div class="flex gap-2">
                        <a href="/todo/{{ $todo->id }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</a>

                        <form action="/todo/{{ $todo->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>
                        <a href="/todo/{{ $todo->id }}/edit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                    </div>
                </div>
                @endforeach
            </div>

</x-app>
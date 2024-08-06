<x-app>
    <x-slot:title>Todo</x-slot>
        <x-slot:pageTitle>Todo Edit</x-slot>

        <div class="shadow-md p-4 ">
            <form action="/todo/{{$id->id}}" method="post" class="flex flex-col gap-4">
                @csrf
                @method('PUT')
                <div class="flex flex-col gap-2">
                    <label for="title">Title:</label>
                    <input class="border p-2 rounded-md" type="text" name="title" value="{{$id->title}}" required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="author">Author:</label>
                    <input class="border p-2 rounded-md" type="text" name="author" value="{{$id->author}}" required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="description">Description:</label>
                    <textarea class="border p-2 rounded-md" name="body" id="" cols="30" rows="5">{{$id->body}}</textarea>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
            </form>
        </div>

</x-app>
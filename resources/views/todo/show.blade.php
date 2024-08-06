<x-app>
    <x-slot:title>Todo</x-slot>
        <x-slot:pageTitle>Todo View</x-slot>

        <div class="shadow-md p-4 ">
            <div  method="post" class="flex flex-col gap-4">
                <div class="flex flex-col gap-2">
                    <label for="title">Title:</label>
                    <p class="border p-2 rounded-md">{{$id->title}}</p>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="author">Author:</label>
                    <p class="border p-2 rounded-md">{{$id->author}}</p>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="description">Description:</label>
                    <p class="border p-2 rounded-md">{{$id->body}}</p>
                </div>
            </div>
        </div>

</x-app>
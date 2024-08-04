<x-app>
    <x-slot:title>Team</x-slot>
    <x-slot:pageTitle>Team</x-slot>

    <ul role="list" class="divide-y divide-gray-100">
        @foreach ($teams as $team)            
        <li class="flex justify-between gap-x-6 py-5">
          <div class="flex min-w-0 gap-x-4">
            <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://randomuser.me/api/portraits/{{$team->id % 2 == 0 ? 'men' : 'women'}}/{{rand(1, 100)}}.jpg" alt="">
            <div class="min-w-0 flex-auto">
              <p class="text-sm font-semibold leading-6 text-gray-900">{{$team->name}}</p>
              <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$team->email}}</p>
              <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$team->phone}}</p>
            </div>
          </div>
          <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
            <p class="text-sm leading-6 text-gray-900">Co-Founder / CEO</p>
            <p class="mt-1 text-xs leading-5 text-gray-500">{{$team->city}} / {{$team->country}}</p>
          </div>
        </li>
        @endforeach
      </ul>
      
</x-app>
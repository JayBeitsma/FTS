<x-layout>
    <h1 class="text-7xl">
        Bus ritten
    </h1>
    <ul class="grid grid-cols-3 gap-[5%] width-[80%]">
        @foreach ($busrides as $busride)
            <li>
                <h2>{{ $busride->name }}</h2>
                <p>{{ $busride->description }}</p>
            </li>
        @endforeach
    </ul>
</x-layout>

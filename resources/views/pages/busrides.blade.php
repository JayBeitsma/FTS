<x-layout>
    <x-planner/>
    <section class="flex flex-col justify-center items-center px-4">
        <h1 class="text-7xl mb-16 mt-8">
            Bus ritten
        </h1>
        <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 w-10/12 mb-16">
            @foreach ($busrides as $busride)
                <li class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <details class="p-6">
                        <summary class="flex justify-between items-center cursor-pointer space-x-4">
                            <img src="{{ asset('images/'. $busride->ftimg) }}" alt="Festival" class="w-16 h-16 rounded-md">
                            <div class="mb-4 border-gray-200 pt-4">
                                <p class="text-lg font-bold">{{ $busride->starting_point }} -> {{ $busride->end_point }}</p>
                                <p>{{ $busride->departure_date }} {{ $busride->departure_time }} -> {{ $busride->arrival_date }} {{ $busride->arrival_time }} </p>
                            </div>
                            <span class="bg-blue-500 text-white px-4 py-2 rounded-md">Details</span>
                        </summary>
                        <div class="mt-4 border-t border-gray-200 pt-4">
                            <p class="text-black mb-4">{{ $busride->description }}</p>
                            <p class="text-black text-lg mb-4">Prijs: €{{ $busride->price }}</p>
                            <form action="{{ route('busrides.tickets.store', $busride->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="price" value="{{ $busride->price }}">
                                @auth
                                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-md">Koop een kaartje</button>
                                @else
                                    <a href="{{ route('login') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-md">Inloggen</a>
                                @endauth
                            </form>
                        </div>
                    </details>
                </li>
            @endforeach
        </ul>
    </section>
</x-layout>

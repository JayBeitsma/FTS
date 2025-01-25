<x-layout>
    <section class="flex flex-col justify-center items-center px-4">
        <h1 class="text-7xl mb-8">
            Bus ritten
        </h1>
        <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 w-10/12">
            @foreach ($busrides as $busride)
                <li class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <details class="p-6">
                        <summary class="flex justify-between items-center cursor-pointer space-x-4">
                            <img src="{{ asset('images/Festival1.jpg') }}" alt="Festival" class="w-16 h-16 rounded-md">
                            <div class="mt-4 border-t border-gray-200 pt-4">
                                <p class="text-gray-800 mb-4">{{ $busride->description }}</p>
                            </div>
                            <span class="bg-blue-500 text-white px-4 py-2 rounded-md">Details</span>
                        </summary>
                        <div class="mt-4 border-t border-gray-200 pt-4">
                            <p class="text-gray-800 mb-4">{{ $busride->description }}</p>
                            <form action="{{ route('busrides.tickets.store', $busride->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="price" value="{{ $busride->price }}">
                                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-md">Buy Tickets</button>
                            </form>
                        </div>
                    </details>
                </li>
            @endforeach
        </ul>
    </section>
</x-layout>

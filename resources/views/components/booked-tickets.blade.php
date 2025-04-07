<div>
    <h2 class="text-2xl font-bold mb-4">Boekingen</h2>
    <div class="flex flex-col space-y-4">
        @foreach ($tickets as $ticket)
            <div class="flex justify-between items-center bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md">
                <div>
                    <h3 class="text-lg font-bold">{{ $ticket->busride->name }}</h3>
                    <p class="text-gray-500"><span class="font-bold text-white">Vertrek: </span>{{ $ticket->busride->departure_date }} {{ $ticket->busride->departure_time }}</p>
                    <p class="text-gray-500"><span class="font-bold text-white">Aankomts: </span>{{ $ticket->busride->arrival_date }} {{ $ticket->busride->arrival_time }}</p>
                </div>
                <div>
                    <p class="text-gray-500">Prijs: €{{ $ticket->price }}</p>
                    <form action="{{ route('dashboard.tickets.destroy', $ticket->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Annuleren</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>

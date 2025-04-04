<div>
    <div class="flex flex-col space-y-4">
        @foreach ($tickets as $ticket)
            <div class="shadow-md">
                <div class="flex justify-between items-center bg-white dark:bg-gray-800 p-4 rounded-lg">
                    <div>
                        <h3 class="text-lg font-bold">{{ $ticket->busride->name }}</h3>
                        <p class="text-gray-500"><span class="font-bold text-white">Vertrek: </span>{{ $ticket->busride->departure_time }}</p>
                        <p class="text-gray-500"><span class="font-bold text-white">Aankomts: </span>{{ $ticket->busride->arrival_time }}</p>
                    </div>
                    <div>
                        <p class="text-gray-500">Prijs: €{{ $ticket->price }}</p>
                        <form action="{{ route('admin.dashboard.tickets.destroy', $ticket->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Annuleren</button>
                        </form>
                    </div>
                </div>
                <div class="flex justify-between items-center bg-white dark:bg-gray-800 p-4 rounded-lg">
                    <p class="text-gray-500"><span class="font-bold text-white">Ticket ID: </span>{{ $ticket->id }}</p>
                    <p class="text-gray-500"><span class="font-bold text-white">Reis ID: </span>{{ $ticket->busride_id }}</p>
                    <p class="text-gray-500"><span class="font-bold text-white">Klant ID: </span>{{ $ticket->user_id }}</p>
                    <p class="text-gray-500"><span class="font-bold text-white">Klant naam: </span>{{ $ticket->user->name }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

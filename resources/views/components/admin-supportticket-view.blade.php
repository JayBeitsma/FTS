<div class="flex justify-center">
    <div class="w-full max-w-4xl">
        <div class="flex flex-col space-y-4">
            @foreach ($supportTickets as $supportTicket)
                <div class="shadow-md rounded-lg overflow-hidden">
                    <div class="flex justify-between items-center bg-white dark:bg-gray-800 p-4">
                        <div>
                            <h3 class="text-lg font-bold">{{ $supportTicket->subject }}</h3>
                            <p class="text-gray-500">{{ $supportTicket->message }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Status: {{ $supportTicket->status }}</p>
                            <form action="{{ route('admin.dashboard.supporttickets.destroy', $supportTicket->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-4">
                        <p class="text-gray-500"><span class="font-bold text-white">Ticket ID: </span>{{ $supportTicket->id }}</p>
                        <p class="text-gray-500"><span class="font-bold text-white">Name: </span>{{ $supportTicket->name }}</p>
                        <p class="text-gray-500"><span class="font-bold text-white">Email: </span>{{ $supportTicket->email }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

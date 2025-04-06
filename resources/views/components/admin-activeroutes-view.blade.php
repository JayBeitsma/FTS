<div>
    <div class="flex flex-col space-y-4">
        @foreach ($activeRoutes as $activeRoute)
            <div class="shadow-md">
                <div class="flex justify-between items-center bg-white dark:bg-gray-800 p-4 rounded-lg">
                    <div>
                        <h3 class="text-lg font-bold">{{ $activeRoute->name }}</h3>
                        <p class="text-gray-500"><span class="font-bold text-white">Vertrek: </span>{{ $activeRoute->departure_time }}</p>
                        <p class="text-gray-500"><span class="font-bold text-white">Aankomst: </span>{{ $activeRoute->arrival_time }}</p>
                    </div>
                    <div>
                        <p class="text-gray-500">Aantal passagiers: {{ $activeRoute->number_of_passangers }}</p>
                        <form action="{{ route('admin.dashboard.activeroutes.destroy', $activeRoute->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Verwijderen</button>
                        </form>
                    </div>
                </div>
                <div class="flex justify-between items-center bg-white dark:bg-gray-800 p-4 rounded-lg">
                    <p class="text-gray-500"><span class="font-bold text-white">Route ID: </span>{{ $activeRoute->id }}</p>
                    <p class="text-gray-500"><span class="font-bold text-white">Busrit ID: </span>{{ $activeRoute->busride_id }}</p>
                    <p class="text-gray-500"><span class="font-bold text-white">Startpunt: </span>{{ $activeRoute->starting_point }}</p>
                    <p class="text-gray-500"><span class="font-bold text-white">Eindpunt: </span>{{ $activeRoute->end_point }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

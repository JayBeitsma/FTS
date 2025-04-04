<div>
    <div class="flex flex-col justify-between items-center bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md">
        <h2 class="text-2xl">Registreer Festival</h2>
        <form action="{{ route('admin.dashboard.busrides.create') }}" method="POST" class="flex flex-col w-4/5 space-y-4">
            @csrf
            @method('POST')
            <div class="flex flex-row justify-between md:flex-row space-x-4 ">
                <div class="w-full">
                    <h3 class="text-lg font-bold">Naam</h3>
                    <input type="text" name="name" placeholder="Naam" class="border border-gray-300 rounded-lg p-2 w-full" required>
                </div>
                <div class="w-full">
                    <h3 class="text-lg font-bold">Afbeelding</h3>
                    <input type="file" name="featured_img" class="border border-gray-300 rounded-lg p-2 w-full">
                </div>
            </div>
            <div class="flex flex-row justify-between md:flex-row space-x-4 ">
                <div class="w-full">
                    <h3 class="text-lg font-bold">Festival naam</h3>
                    <input type="text" name="festival_name" placeholder="Festival naam" class="border border-gray-300 rounded-lg p-2 w-full" required>
                </div>
                <div class="w-full">
                    <h3 class="text-lg font-bold">Beschrijving</h3>
                    <textarea name="description" placeholder="Beschrijving" class="border border-gray-300 rounded-lg p-2 w-full" required></textarea>
                </div>
            </div>
            <div class="flex flex-row justify-between md:flex-row space-x-4 ">
                <div class="w-full">
                    <h3 class="text-lg font-bold">Startpunt</h3>
                    <input type="text" name="starting_point" placeholder="Startpunt" class="border border-gray-300 rounded-lg p-2 w-full" required>
                </div>
                <div class="w-full">
                    <h3 class="text-lg font-bold">Eindpunt</h3>
                    <input type="text" name="end_point" placeholder="Eindpunt" class="border border-gray-300 rounded-lg p-2 w-full" required>
                </div>
            </div>
            <div class="flex flex-row justify-between md:flex-row space-x-4 ">
                <div class="w-full">
                    <h3 class="text-lg font-bold">Prijs</h3>
                    <input type="number" name="price" placeholder="Prijs" class="border border-gray-300 rounded-lg p-2 w-full" required>
                </div>
                <div class="w-full">
                    <h3 class="text-lg font-bold">Tijd van vertrek</h3>
                    <input type="datetime-local" name="departure_time" class="border border-gray-300 rounded-lg p-2 w-full" required>
                </div>
            </div>
            <div class="flex flex-row justify-between md:flex-row space-x-4 ">
                <div class="w-full">
                    <h3 class="text-lg font-bold">Tijd van aankomst</h3>
                    <input type="datetime-local" name="arrival_time" class="border border-gray-300 rounded-lg p-2 w-full" required>
                </div>
                <div class="w-full">
                    <h3 class="text-lg font-bold">Aantal tickets</h3>
                    <input type="number" name="tickets_available" placeholder="Aantal tickets" class="border border-gray-300 rounded-lg p-2 w-full" required>
                </div>
            </div>
            <button type="submit" class="bg-blue-500 text-white rounded-lg p-2">Registreer</button>
        </form>
    </div>
    </div>
    <div class="flex flex-col space-y-4">
        @foreach ($busrides as $Busride)
            <div class="shadow-md">
                <div class="flex justify-between items-center bg-white dark:bg-gray-800 p-4 rounded-lg">
                    <div>
                        <h3 class="text-lg font-bold">{{ $Busride->name }}</h3>
                        <p class="text-gray-500"><span class="font-bold text-white">Vertrek: </span>{{ $Busride->departure_time }}</p>
                        <p class="text-gray-500"><span class="font-bold text-white">Aankomts: </span>{{ $Busride->arrival_time }}</p>
                        <p class="text-gray-500"><span class="font-bold text-white">Bus ID: </span>{{ $Busride->id }}</p>
                        <p class="text-gray-500"><span class="font-bold text-white">Aantal boekingen: </span>{{ $Busride->tickets_count }}</p>
                        <p class="text-gray-500"><span class="font-bold text-white">Aantal bussen: </span> 0 </p>
                    </div>
                    <div>
                        <p class="text-gray-500">Prijs: €{{ $Busride->price }}</p>
                        <form action="{{ route('admin.dashboard.busrides.destroy', $Busride->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Annuleren</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

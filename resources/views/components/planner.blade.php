<section class="bg-blue-500 h-64 flex justify-center items-center px-4">
    <form class="gap-6 w-1/2" action="{{ route('busrides.index') }}" method="GET">
        <div>
            <h1 class="text-5xl">
                Plan je reis
            </h1>
        </div>
        <div class="flex items-center w-full gap-4 justify-between mt-6">
            <div class="w-1/2 flex">
                <span class="bg-white border border-blue-500 font-bold rounded-l-md px-4 py-3 flex-shrink-0">van</span>
                <input type="text" name="start" placeholder="Startpunt" class="border border-blue-500 rounded-r-md px-4 py-3 flex-grow text-lg">
            </div>
            <div class="w-auto flex justify-center items-center">
                <img src="{{ asset('images/arrowpointright.png') }}" alt="Arrow pointing right" class="h-8 w-auto">
            </div>
            <div class="w-1/2 flex">
                <span class="bg-white border border-blue-500 font-bold rounded-l-md px-4 py-3 flex-shrink-0">naar</span>
                <input type="text" name="end" placeholder="Eindpunt" class="border border-blue-500 rounded-r-md px-4 py-3 flex-grow text-lg">
            </div>
        </div>
        <div class="flex w-full justify-between mt-6">
            <div class="flex w-1/2">
                <div>
                    <input type="date" class="border border-blue-500 rounded-md px-4 py-3 text-md bg-transparent text-white">
                </div>
                <div>
                    <input type="time" class="border border-blue-500 rounded-md px-4 py-3 text-md bg-transparent text-white">
                </div>
            </div>
            <div class="flex">
                <button type="submit" class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-3 px-6 border border-blue-900 rounded-md">Plan</button>
            </div>
        </div>
    </form>
</section>





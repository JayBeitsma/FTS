<x-layout>
    <x-planner/>
    <section class="h-screen">
        <div class="flex justify-center items-center h-1/2 relative mt-10 w-full gap-24">
            <div class="relative w-1/3 h-full bg-cover bg-center shadow-lg" style="background-image: url('{{ asset('images/festivalcta.jpg') }}');">
                <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Pseudo-element for background brightness -->
                <div class="absolute inset-0 p-6 flex flex-col justify-between">
                    <div>
                        <h1 class="text-5xl text-white font-bold mb-4">Ontdek de leukste festivals</h1>
                        <p class="text-xl text-white mb-8">Bij Festival Travels geloven we niet alleen in onvergetelijke festivalervaringen, maar ook in het behouden van de natuur waarin ze plaatsvinden. Al jaren bieden wij comfortabele en duurzame busritten aan naar de populairste festivals, met als doel onze ecologische voetafdruk zo klein mogelijk te houden. Samen reizen betekent minder auto's op de weg, minder CO₂-uitstoot en meer zorg voor onze planeet. </p>
                    </div>
                    <a href="{{ route('busrides.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-8 border border-blue-900 rounded-md w-1/3">Bekijk busritten --></a>
                </div>
            </div>
            <div class="w-1/5 h-full bg-gray-100 shadow-lg border border-gray-400 flex flex-col items-center">
                <h2 class="text-2xl text-black font-bold p-4">Busvertragingen</h2>
                <ul class="w-full flex flex-col items-center gap-4">
                    <li class="border-b border-gray-400 py-2 bg-transparent rounded w-4/5">
                        <div class="text-xl text-black font-bold">
                            <span>Bus Lijn 213</span>
                        </div>
                        <div class="flex justify-between items-center text-xl text-black font-bold">
                            <span class="w-1/3">Oosbruggen</span>
                            <span class="w-1/3 text-center">---></span>
                            <span class="w-1/3 text-right">Apeldoorn</span>
                        </div>
                        <div class="flex justify-between items-center text-xl text-black font-bold">
                            <span class="w-1/2"><span class="line-through">15:14  </span> -> 15:17</span>
                            <span class="w-1/2 text-right"><span class="line-through">15:25</span> -> 15:28</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</x-layout>


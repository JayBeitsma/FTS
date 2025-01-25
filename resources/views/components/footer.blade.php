<footer class="bg-gray-800 text-white py-8 flex flex-col justify-between min-h-full">
    <div class="container mx-auto flex justify-between">
        <div class="w-1/4 flex justify-center items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16">
        </div>
        <div class="w-1/4">
            <h3 class="text-lg font-bold mb-4">Bedrijf</h3>
            <ul>
                <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white">Over ons</a></li>
            </ul>
        </div>
        <div class="w-1/4">
            <h3 class="text-lg font-bold mb-4">Support</h3>
            <ul>
                <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white">Contact Us</a></li>
            </ul>
        </div>
        <div class="w-1/4">
            <h3 class="text-lg font-bold mb-4">Bussen</h3>
            <ul>
                <li><a href="{{ route('busrides.index') }}" class="text-gray-400 hover:text-white">Routes</a></li>
            </ul>
            <ul>
                <li><a href="{{ route('index') }}" class="text-gray-400 hover:text-white">Planner</a></li>
            </ul>
        </div>
    </div>
    <div class="text-center py-4 mt-8 border-t border-gray-600">
        <p class="text-gray-400">&copy; {{ date('Y') }} Festival Travels. All rights reserved.</p>
    </div>
</footer>

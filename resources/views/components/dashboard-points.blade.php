<ul class="flex items-center gap-6 text-xl">
    <li>
        <a href="{{ route('dashboard') }}" class="hover:border-b-2 hover:border-blue-500">
            {{ $username }}
        </a>
    </li>
    <li>
        <a href="{{ route('dashboard') }}" class="flex items-center gap-2 bg-transparent text-amber-400 font-semibold py-2 px-4 border border-amber-400 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
            </svg>
            {{ $points }}
        </a>
    </li>
</ul>



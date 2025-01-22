<header>
    <div class="container mx-auto flex items-center justify-between">
        <a href="{{ route('index') }}" class="flex items-center gap-3 text-3xl font-bold">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
            </svg>
            {{ config('app.name') }}
        </a>
        @auth
            {{-- User is logged in --}}
            <x-nav :username="auth()->user()->name "/>
        @else
            {{-- User is a guest (not logged in) --}}
            <x-guest-nav/>
        @endauth
    </div>
</header>

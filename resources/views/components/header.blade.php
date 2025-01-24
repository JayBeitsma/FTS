<header class="h-16 bg-gray-100 border-b">
    <div class="container mx-auto flex items-center justify-between h-full px-4 md:px-8">
        <!-- Navigation -->
        <x-nav/>
        @auth
            {{-- User is logged in --}}
            <x-dashboard-points :username="auth()->user()->name" :points="auth()->user()->points"/>
        @else
            {{-- Guest navigation --}}
            <x-login-register/>
        @endauth
    </div>
</header>


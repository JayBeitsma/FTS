<header class="h-16 bg-gray-100 border-b">
    <div class="container mx-auto flex items-center justify-between h-full px-4 md:px-8">
        <!-- Navigation -->
        <x-nav/>
        <div class="flex justify-between items-center w-1/4">
            @auth('admin')
                {{-- Admin is logged in --}}
                <x-dashboard-points :username="auth('admin')->user()->name" :points="auth('admin')->user()->points"/>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @elseauth
                {{-- User is logged in --}}
                <x-dashboard-points :username="auth()->user()->name" :points="auth()->user()->points"/>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                {{-- Guest navigation --}}
                <x-login-register/>
            @endauth
        </div>
    </div>
</header>


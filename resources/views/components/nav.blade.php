<nav>
    <ul class="flex items-center gap-6 text-2xl">
        <il>
            <a href="{{ route('index') }}">Home</a>
        </il>
        <il>
            <a href="{{ route('festivals') }} ">Festivals</a>
        </il>
        <il>
            <a href="{{ route('rijsoverzicht') }}">Rijsoverzicht</a>
        </il>
        <il>
            <a href="{{ route('contact') }}">Contact</a>
        </il>
        <il>
            <a href="{{ route('dashboard') }}">{{ $username }}</a>
        </il>
    </ul>
</nav>

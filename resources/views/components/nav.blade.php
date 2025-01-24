<nav class="flex gap-8">
    {{--    Logo    --}}
    <a href="{{ route('index') }}" class="flex items-center gap-3 text-xl font-bold truncate">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-auto object-contain">
    </a>
    {{--    Nav     --}}
    <ul class="flex items-center gap-6 text-xl font-bold">
        <li>
            <a href="{{ route('index') }}" class="hover:border-b-2 hover:border-blue-500">Home</a>
        </li>
        <li>
            <a href="{{ route('busrides') }}" class="hover:border-b-2 hover:border-blue-500">Busritten</a>
        </li>
        <li>
            <a href="{{ route('about') }}" class="hover:border-b-2 hover:border-blue-500">Over ons</a>
        </li>
        <li>
            <a href="{{ route('contact') }}" class="hover:border-b-2 hover:border-blue-500">Contact</a>
        </li>
    </ul>
</nav>

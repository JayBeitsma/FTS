<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <div class="container mx-auto flex items-center justify-between">
            <a href="{{ route('index') }}" class="flex items-center gap-3 text-3xl font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                {{ config('app.name') }}
            </a>
            <nav>
                <ul class="flex items-center gap-6 text-2xl">
                    <il>
                        <a href="{{ route('index') }}">Home</a>
                    </il>
                    <il>
                        <a href="{{ route('festivals') }} ">Festivals</a>
                    </il>
                    <il>
                        <a href="{{ route('rijsoverzicht') }}">Rijs Overzicht</a>
                    </il>
                    <il>
                        <a href="{{ route('contact') }}">Contact</a>
                    </il>
                    <il>
                        <a href="/">Inloggen</a>
                    </il>
                    <il>
                        <a href="/">Registreren</a>
                    </il>
                </ul>
            </nav>
        </div>
    </header>
    <main> {{ $slot }}</main>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Coders Free')</title>

    {{-- fontawesome --}}
    {{-- tipografia --}}

    @stack('css')
</head>
<body>

    <header>

    </header>

    {{ $slot }}

    <footer>

    </footer>

    @stack('js')
</body>
</html>
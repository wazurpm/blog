<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Coders Free')</title>
    
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {{-- fontawesome --}}
    {{-- tipografia --}}

    @stack('css')
</head>
<body>

    <header>

    </header>

    @yield('content')

    <footer>

    </footer>

    @stack('js')
</body>
</html>
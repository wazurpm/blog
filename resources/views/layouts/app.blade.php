<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Blog - @yield('title', 'Blog')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="bg-gray-800 text-white p-4">
        <nav>
            <ul class="flex space-x-4">
                <li><a href="{{ route('posts.index') }}" class="hover:text-gray-300">Posts</a></li>
                <li><a href="{{ route('posts.create') }}" class="hover:text-gray-300">Crear Post</a></li>
            </ul>
        </nav>
    </header>

    <main class="container mx-auto px-4 py-8">
        <x-AppLayout>  {{ view('welcome') }}  </x-AppLayout>
    </main>

    <footer class="bg-gray-800 text-white p-4 mt-8">
        <p class="text-center">&copy; {{ date('Y') }} Laravel Blog</p>
    </footer>
</body>
</html>
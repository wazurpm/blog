<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Laravel 12</title>
</head>
<body>
    <div class="max-w-4xl mx-auto px-4">
        {{--<h1>Hola Mundo</h1>--}}
        
        <x-alert2 type="success" class="mb-4">
            <x-slot name='title'>Alerta!</x-slot>
            Contenido de la alerta
        </x-alert2>

        <p>Hola Mundo</p>
    </div>

</body>
</html>
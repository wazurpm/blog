<x-AppLayout>
    <div class="max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">Crear Nuevo Post</h1>

        @if ($errors->any())
        
        <x-alert type="danger" class="mb-4">
            <x-slot name="title">Error!</x-slot>
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </x-alert>

        @endif

        <form action="{{ route('posts.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700">Título:</label>
                <input type="text" name="title" value="{{ old('title') }}" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Categoría:</label>
                <input type="text" name="category" value="{{ old('category') }}"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Contenido:</label>
                <textarea name="content" rows="5" 
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">{{ old('content') }}</textarea>
            </div>

            <div>
                <button type="submit" 
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Crear Post
                </button>

                <a href="{{ route('posts.index') }}" 
                   class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2.5 px-4 rounded">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</x-AppLayout>
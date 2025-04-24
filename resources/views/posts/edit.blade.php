<x-AppLayout>
    <div class="max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">Editar Post</h1>

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

        <form action="{{ route('posts.update', $post) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-gray-700">Título:</label>
                <input type="text" name="title" value="{{ old('title', $post->title) }}" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Categoría:</label>
                <input type="text" name="category" value="{{ old('category', $post->category) }}"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Contenido:</label>
                <textarea name="content" rows="5" 
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">{{ old('content', $post->content) }}</textarea>
            </div>

            <div class="flex space-x-4">
                <button type="submit" 
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer">
                    Actualizar Post
                </button>

                <a href="{{ route('posts.show', $post) }}" 
                   class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded cursor-pointer">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</x-AppLayout>
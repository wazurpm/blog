<x-app-layout>
    <div class="max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">Editar Post</h1>

        <form action="{{ route('posts.update', $post) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-gray-700">Título:</label>
                <input type="text" name="title" value="{{ $post->title }}" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Categoría:</label>
                <input type="text" name="category" value="{{ $post->category }}"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Contenido:</label>
                <textarea name="content" rows="5" 
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">{{ $post->content }}</textarea>
            </div>

            <div class="flex space-x-4">
                <button type="submit" 
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Actualizar Post
                </button>

                <a href="{{ route('posts.show', $post) }}" 
                   class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</x-app-layout>
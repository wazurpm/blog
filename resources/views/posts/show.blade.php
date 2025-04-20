<x-app-layout>
    <article class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
        <div class="mb-4">
            <span class="text-gray-600">Categoría: {{ $post->category }}</span>
        </div>
        
        <div class="prose max-w-none mb-6">
            {{ $post->content }}
        </div>

        <div class="flex space-x-4">
            <a href="{{ route('posts.edit', $post->slug) }}" 
               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Editar Post
            </a>

            <form action="{{ route('posts.destroy', $post->slug) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                        onclick="return confirm('¿Estás seguro de que deseas eliminar este post?')">
                    Eliminar Post
                </button>
            </form>
        </div>

        <div class="mt-4">
            <a href="{{ route('posts.index') }}" class="text-blue-600 hover:underline">
                ← Volver a la lista
            </a>
        </div>
    </article>
</x-app-layout>
<x-app-layout>
    <div class="space-y-4">
        <h1 class="text-2xl font-bold">Lista de Posts</h1>

        <div class="mb-4">
            <a href="{{ route('posts.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                Crear nuevo post
            </a>
        </div>

        @foreach($posts as $post)
            <article class="p-4 bg-white shadow rounded">
                <h2 class="text-xl">
                    <a href="{{ route('posts.show', $post->slug) }}" class="text-blue-600 hover:underline">
                        {{ $post->title }}
                    </a>
                </h2>
                <p class="text-gray-600">{{ $post->category }}</p>
            </article>
        @endforeach

        {{ $posts->links() }}
    </div>
</x-app-layout>
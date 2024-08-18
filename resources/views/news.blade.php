<x-layout>
    <x-slot:heading>
        Latest News
    </x-slot:heading>

    <div class="container mx-auto py-6">
        @auth
            <div class="flex justify-end mb-4">
                <a href="{{ route('news.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Nieuw Artikel Toevoegen
                </a>
            </div>
        @endauth

        @if ($userArticles->isNotEmpty())
            <h2 class="text-xl font-bold mb-4">Jouw Artikelen</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-8">
                @foreach ($userArticles as $article)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img class="w-full h-48 object-cover" src="{{ asset('storage/'.$article->image_file) }}" alt="{{ $article->title }}">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2">{{ $article->title }}</h3>
                            <p class="text-sm text-gray-600 mb-4">
                                <span class="font-semibold">
                                    {{ $article->user ? $article->user->name : 'Unknown Author' }}
                                </span>
                                |
                                {{ $article->created_at->format('d M Y') }}
                            </p>
                            <a href="{{ route('news.edit', $article) }}" class="text-blue-500 hover:underline">Bewerk</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <h2 class="text-xl font-bold mb-4">Andere Artikelen</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($otherArticles as $article)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $article->image_file) }}" alt="{{ $article->title }}">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">{{ $article->title }}</h3>
                        <p class="text-sm text-gray-600 mb-4">
                            <span class="font-semibold">
                                {{ $article->user ? $article->user->name : 'Unknown Author' }}
                            </span>
                            |
                            {{ $article->created_at->format('d M Y') }}
                        </p>
                        <a href="{{ route('news.show', $article) }}" class="text-blue-500 hover:underline">Lees Meer</a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $otherArticles->links() }}
        </div>
    </div>
</x-layout>


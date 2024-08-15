<x-layout>
    <x-slot:heading>
        Artikels in Civil Law & Litigation
    </x-slot:heading>

    <div class="container mx-auto py-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($news as $new)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img class="w-full h-48 object-cover" src="{{ $new->image_url }}" alt="{{ $new->title }}">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">{{ $new->title }}</h3>
                        <p class="text-sm text-gray-600 mb-4">
                            <span class="font-semibold">{{ $new->author }}</span> | {{ $new->published_at->format('d M Y') }}
                        </p>
                        <a href="{{ route('news.show', $new) }}" class="text-blue-500 hover:underline">Lees Meer</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>

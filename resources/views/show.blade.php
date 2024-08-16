<!-- resources/views/news/show.blade.php -->
<x-layout>
    <x-slot:heading>
        {{ $news->title }}
    </x-slot:heading>

    <div class="container mx-auto py-6">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img class="w-full h-64 object-cover" src="{{ asset('storage/'.$news->image_file) }}" alt="{{ $news->title }}">
            <div class="p-6">
                <h1 class="text-2xl font-bold mb-4">{{ $news->title }}</h1>
                <p class="text-sm text-gray-600 mb-4">
                    <span class="font-semibold">{{ $news->user ? $news->user->name : 'Unknown Author' }}</span>
                    |
                    {{ $news->created_at->format('d M Y') }}
                </p>
                <div class="text-lg text-gray-800">
                    {!! nl2br(e($news->content)) !!}
                </div>
            </div>
        </div>
        <div class="mt-6">
            <a href="{{ route('news') }}" class="text-blue-500 hover:underline">Terug naar Artikels</a>
        </div>
    </div>
</x-layout>


<!-- resources/views/profile/show.blade.php -->
<x-layout>
    <x-slot name="heading">Profile</x-slot>

    <div class="container mx-auto py-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center">
                @if($user->avatar)
                    <img class="w-24 h-24 rounded-full mr-4" src="{{ asset('storage/' . $user->avatar) }}" alt="User Avatar">
                @else
                    <img class="w-24 h-24 rounded-full mr-4" src="{{ asset('default-avatar.png') }}" alt="Default Avatar">
                @endif
                <div>
                    <h2 class="text-2xl font-bold">{{ $user->username }}</h2>
                    <p>{{ $user->birthday ? $user->birthday->format('d M Y') : 'No birthday set' }}</p>
                </div>
            </div>
            <div class="mt-6">
                <h3 class="text-xl font-bold">About Me</h3>
                <p>{{ $user->about_me ?? 'No biography provided' }}</p>
            </div>
            <div class="mt-6">
                <a href="{{ route('profile.edit') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit Profile</a>
            </div>
        </div>
    </div>
</x-layout>

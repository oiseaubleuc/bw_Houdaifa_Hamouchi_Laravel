
<x-layout>
    <x-slot name="heading">Edit Profile</x-slot>

    <div class="container mx-auto py-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" id="username" name="username" value="{{ old('username', $user->username) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div class="mb-4">
                    <label for="birthday" class="block text-sm font-medium text-gray-700">Birthday</label>
                    <input type="date" id="birthday" name="birthday" value="{{ old('birthday', $user->birthday) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>

                <div class="mb-4">
                    <label for="avatar" class="block text-sm font-medium text-gray-700">Avatar</label>
                    <input type="file" id="avatar" name="avatar" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>

                <div class="mb-4">
                    <label for="about_me" class="block text-sm font-medium text-gray-700">About Me</label>
                    <textarea id="about_me" name="about_me" rows="5" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('about_me', $user->about_me) }}</textarea>
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>


<x-layout>
    <x-slot:heading>
        Contacteer Ons
    </x-slot:heading>

    <div class="container mx-auto py-6">
        <!-- Succesbericht -->
        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Contactformulier -->
        <form method="POST" action="{{ route('contact.submit') }}" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="first_name" class="block text-sm font-medium text-gray-700">Voornaam</label>
                    <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                    @error('first_name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Achternaam</label>
                    <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                    @error('last_name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">E-mailadres</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Telefoonnummer</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                @error('phone')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="message" class="block text-sm font-medium text-gray-700">Bericht</label>
                <textarea id="message" name="message" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>{{ old('message') }}</textarea>
                @error('message')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Bericht Verzenden</button>
            </div>
        </form>

        <!-- Embedded Google Maps -->
        <div class="mt-8">
            <h3 class="text-xl font-bold mb-4">Onze Locatie</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.4020378843675!2d4.320233077352735!3d50.84223897166962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c55f1eb0be91%3A0x1cb44c9f6c7da498!2sNijverheidskaai%20170%2C%201070%20Anderlecht!5e0!3m2!1snl!2sbe!4v1723887825896!5m2!1snl!2sbe"
                width="100%"
                height="400"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</x-layout>

<x-layout>
    <x-slot:heading>
        Verkeersrecht
    </x-slot:heading>

    <div class="container mx-auto py-6">
        <!-- Header Section -->
        <h2 class="text-2xl font-bold">Verkeersrecht</h2>
        <p class="mt-4 text-gray-600">Ondersteuning bij familierechtelijke kwesties zoals echtscheiding en kinderopvang.</p>
        <img src="/images/verkeersrecht.jpeg" alt="Verkeersrecht" class="w-full mt-6 rounded-lg">

        <!-- Form Section -->
        <form action="{{ route('submit_casus') }}" method="post" enctype="multipart/form-data" class="box p-6 mt-8 border rounded-lg shadow-lg">
            @csrf
            <div class="content">
                <h2 class="text-xl font-semibold mb-4">Dien uw casus in</h2>

                <div class="mb-4">
                    <label for="naam" class="block text-gray-700">Naam:</label>
                    <input type="text" id="naam" name="naam" required class="input-field border rounded w-full py-2 px-3 mt-1">
                </div>

                <div class="mb-4">
                    <label for="voornaam" class="block text-gray-700">Voornaam:</label>
                    <input type="text" id="voornaam" name="voornaam" required class="input-field border rounded w-full py-2 px-3 mt-1">
                </div>

                <div class="mb-4">
                    <label for="username" class="block text-gray-700">Gebruikersnaam:</label>
                    <input type="text" id="username" name="username" required class="input-field border rounded w-full py-2 px-3 mt-1">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700">E-mailadres:</label>
                    <input type="email" id="email" name="email" required class="input-field border rounded w-full py-2 px-3 mt-1">
                </div>

                <div class="mb-4">
                    <label for="beschrijving" class="block text-gray-700">Beschrijving van de casus:</label>
                    <textarea id="beschrijving" name="beschrijving" required class="input-field border rounded w-full py-2 px-3 mt-1" rows="8" style="min-height: 150px;"></textarea>
                </div>

                <div class="mb-4">
                    <label for="bijlage" class="block text-gray-700">Bijlage toevoegen:</label>
                    <input type="file" id="bijlage" name="bijlage" class="input-field border rounded w-full py-2 px-3 mt-1">
                </div>
                <input type="hidden" name="type" value="verkeersrecht">

                <button type="submit" class="submit-button bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Verzenden</button>
            </div>
        </form>
    </div>
</x-layout>

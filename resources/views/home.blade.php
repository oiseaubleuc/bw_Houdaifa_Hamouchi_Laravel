<x-layout>
    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <x-slot:heading>
        Selecteer Rechtsgebied
    </x-slot:heading>

    <div class="container mx-auto py-6">
        <!-- Strafrecht -->
        <a href="{{ route('strafrecht') }}" class="box block mb-6">
            <img src="/images/strafrecht.jpeg" alt="Strafrecht" class="w-full rounded-lg">
            <div class="content mt-4">
                <h2 class="text-2xl font-bold">Strafrecht</h2>
                <p class="mt-2 text-gray-600">Advies en vertegenwoordiging in alle strafrechtelijke zaken.</p>
            </div>
        </a>

        <!-- Verkeersrecht -->
        <a href="{{ route('verkeersrecht') }}" class="box block mb-6">
            <img src="/images/verkeersrecht.jpeg" alt="Verkeersrecht" class="w-full rounded-lg">
            <div class="content mt-4">
                <h2 class="text-2xl font-bold">Verkeersrecht</h2>
                <p class="mt-2 text-gray-600">Hulp bij verkeersovertredingen en verkeersgerelateerde juridische problemen.</p>
            </div>
        </a>


        <!-- Familierecht -->
        <a href="{{ route('familierecht') }}" class="box block mb-6">
            <img src="/images/familierecht.jpeg" alt="Familierecht" class="w-full rounded-lg">
            <div class="content mt-4">
                <h2 class="text-2xl font-bold">Familierecht</h2>
                <p class="mt-2 text-gray-600">Ondersteuning bij familierechtelijke kwesties zoals echtscheiding en kinderopvang.</p>
            </div>
        </a>
    </div>

</x-layout>

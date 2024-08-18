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

        <div class="flex flex-wrap -mx-3">

            <a href="{{ route('strafrecht') }}" class="box block mb-6 px-3 w-full sm:w-1/3">
                <div class="relative w-full pb-[75%]"> <!-- Aspect ratio container -->
                    <img src="/images/strafrecht.jpeg" alt="Strafrecht" class="absolute inset-0 w-full h-full object-cover rounded-lg">
                </div>
                <div class="content mt-4">
                    <h2 class="text-2xl font-bold">Strafrecht</h2>
                    <p class="mt-2 text-gray-600">Het strafrecht speelt een cruciale rol in het handhaven van orde en gerechtigheid door te voorzien in regels voor het strafrechtelijke proces en de bestraffing van misdrijven. Of je nu geconfronteerd wordt met beschuldigingen van een strafbaar feit, betrokken bent bij een strafrechtelijk onderzoek, of juridische bijstand nodig hebt tijdens een rechtszaak, wij bieden deskundige ondersteuning en verdediging. Ons team van ervaren advocaten is gespecialiseerd in het behandelen van diverse strafrechtelijke kwesties, van ernstige misdrijven tot minder ernstige overtredingen. We zorgen ervoor dat je rechten worden beschermd en dat je een eerlijke behandeling krijgt binnen het juridische systeem.</p>
                </div>
            </a>


            <a href="{{ route('verkeersrecht') }}" class="box block mb-6 px-3 w-full sm:w-1/3">
                <div class="relative w-full pb-[75%]"> <!-- Aspect ratio container -->
                    <img src="/images/verkeersrecht.jpeg" alt="Verkeersrecht" class="absolute inset-0 w-full h-full object-cover rounded-lg">
                </div>
                <div class="content mt-4">
                    <h2 class="text-2xl font-bold">Verkeersrecht</h2>
                    <p class="mt-2 text-gray-600">Het verkeersrecht regelt alle juridische aspecten met betrekking tot het verkeer op de openbare weg. Dit omvat niet alleen verkeersboetes en overtredingen, maar ook complexe kwesties zoals verkeersongevallen, schadeclaims en juridische procedures. Of je nu te maken hebt met een verkeersboete, betrokken bent bij een verkeersongeval, of juridische hulp nodig hebt bij een geschil over schadevergoeding, wij staan klaar om je te ondersteunen. Onze specialisten bieden praktische en effectieve oplossingen om jouw verkeersrechtelijke problemen aan te pakken en je te helpen de juiste koers te volgen in elke situatie die je tegenkomt op de weg.</p>
                </div>
            </a>


            <a href="{{ route('familierecht') }}" class="box block mb-6 px-3 w-full sm:w-1/3">
                <div class="relative w-full pb-[75%]"> <!-- Aspect ratio container -->
                    <img src="/images/familierecht.jpeg" alt="Familierecht" class="absolute inset-0 w-full h-full object-cover rounded-lg">
                </div>
                <div class="content mt-4">
                    <h2 class="text-2xl font-bold">Familierecht</h2>
                    <p class="mt-2 text-gray-600">Het familierecht behandelt juridische kwesties die van invloed zijn op familie- en gezinsrelaties. Deze rechtsgebied omvat zaken zoals echtscheidingen, voogdijgeschillen, onderhoudsverplichtingen en andere persoonlijke geschillen. Het kan een emotioneel en complex proces zijn, vooral wanneer het gaat om belangrijke beslissingen die het welzijn van kinderen en gezinsleden beïnvloeden. Onze advocaten hebben uitgebreide ervaring in het familierecht en bieden empathische en doeltreffende begeleiding door elke stap van het juridische proces. Wij helpen je bij het navigeren door de juridische uitdagingen van familiezaken en streven naar oplossingen die het beste passen bij jouw unieke situatie.</p>
                </div>
            </a>
        </div>
    </div>

</x-layout>


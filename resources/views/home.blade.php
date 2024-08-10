<x-layout>
    <x-slot:heading>
        Home page
    </x-slot:heading>
<h1> hello from the home page </h1>
    <!DOCTYPE html>
    <html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Selecteer Rechtsgebied</title>
        <link rel="stylesheet" href="/resources/css/app.css">
    </head>
    <body>

    <div class="container">
        <!-- Strafrecht -->
        <div class="box" onclick="location.href='#';">
            <img src="strafrecht.jpg" alt="Strafrecht">
            <div class="content">
                <h2>Strafrecht</h2>
                <p>Advies en vertegenwoordiging in alle strafrechtelijke zaken.</p>
            </div>
        </div>

        <!-- Verkeersrecht -->
        <div class="box" onclick="location.href='#';">
            <img src="verkeersrecht.jpg" alt="Verkeersrecht">
            <div class="content">
                <h2>Verkeersrecht</h2>
                <p>Hulp bij verkeersovertredingen en verkeersgerelateerde juridische problemen.</p>
            </div>
        </div>

        <!-- Familierecht -->
        <div class="box" onclick="location.href='#';">
            <img src="familierecht.jpg" alt="Familierecht">
            <div class="content">
                <h2>Familierecht</h2>
                <p>Ondersteuning bij familierechtelijke kwesties zoals echtscheiding en kinderopvang.</p>
            </div>
        </div>
    </div>

    </body>
    </html>

</x-layout>

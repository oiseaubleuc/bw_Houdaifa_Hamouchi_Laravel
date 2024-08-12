<x-layout>
    <x-slot:headings>
         Contact page
    </x-slot:headings>
    <h1> hello from the contact page </h1>
    <!DOCTYPE html>
    <html lang="nl">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Neem Contact Op</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap"
              rel="stylesheet">
        <link rel="stylesheet" href="/resources/css/app.css">
    </head>

    <body>
    <header>
        <h1>Neem Contact Op</h1>
    </header>

    <main>
        <section class="contact-form-section">
            <h2>We horen graag van u</h2>
            <form action="contact.php" method="post" class="contact-form">
                <label for="name">Uw Naam</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Uw E-mail</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Uw Bericht</label>
                <textarea id="message" name="message" rows="6" required></textarea>

                <button type="submit">Verzend Bericht</button>
            </form>
        </section>
    </main>


    <footer>
        <p>&copy; 2024 Neem Contact Op. Alle rechten voorbehouden.</p>
    </footer>
    </body>

    </html>

</x-layout>

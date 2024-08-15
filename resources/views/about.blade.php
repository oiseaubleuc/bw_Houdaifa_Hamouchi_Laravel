<x-layout>
    <x-slot:heading>
        About Us
    </x-slot:heading>


    <div class="container mx-auto py-6">
        <h1 class="text-3xl font-bold">About Us</h1>
        <p class="mt-4 text-gray-600">This is the About page.</p>
        <script src="https://cdn.tailwindcss.com"></script>

    </div>

    <div>
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
    </div>
</x-layout>

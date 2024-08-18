<x-layout>


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>

        @auth
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        @else
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        @endauth

        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
    <div class="container">
        <header>
        </header>
        <main>
            {{ $slot }}
        </main>
        <footer>
        </footer>
    </div>

    @auth
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @endauth
    </body>


</x-layout>


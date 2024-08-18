<x-layout>
    <x-slot:heading>Read Me - About This Project:</x-slot:heading>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">About This Project</h1>
        <p class="text-lg text-gray-600 mb-6">
            Welcome to the "Law emergency " website. This website was developed as a dynamic web application using the Laravel framework. The site features a user login system, profile pages, an admin-controlled news section, FAQ management, and a contact form. The project adheres to best practices in security, including XSS and CSRF protection, as well as client-side validation. Below, you'll find a list of sources and resources that were instrumental in the development of this website.
        </p>

        <h2 class="text-3xl font-semibold text-gray-800 mb-4">Sources and Resources</h2>

        <ul class="list-disc pl-5 space-y-3 text-lg text-gray-600">
            <li>
                <strong>Laravel Documentation:</strong>
                The official Laravel documentation was used extensively throughout this project to understand and implement various features such as routing, middleware, controllers, and authentication.
                <a href="https://laravel.com/docs" class="text-blue-500 hover:underline" target="_blank">https://laravel.com/docs</a>
            </li>

            <li>
                <strong>Tailwind CSS:</strong>
                Tailwind CSS was used to style the website. The official documentation was referenced to apply utility classes for layout, typography, and responsive design.
                <a href="https://tailwindcss.com/docs" class="text-blue-500 hover:underline" target="_blank">https://tailwindcss.com/docs</a>
            </li>

            <li>
                <strong>Authentication with Laravel:</strong>
                The default authentication scaffolding provided by Laravel was utilized, including login, registration, password resets, and user roles.
                <a href="https://laravel.com/docs/10.x/authentication" class="text-blue-500 hover:underline" target="_blank">https://laravel.com/docs/10.x/authentication</a>
            </li>

            <li>
                <strong>Bootstrap:</strong>
                Bootstrap was used as a fallback for some design elements and to ensure cross-browser compatibility.
                <a href="https://getbootstrap.com/" class="text-blue-500 hover:underline" target="_blank">https://getbootstrap.com/</a>

            </li>

            <li>
                <strong>Tutorials and Guides:</strong>
                Various online tutorials and guides were used as reference materials. These were modified and adapted to fit the specific needs of this project. Notable resources include:
                <ul class="list-disc pl-5 space-y-2 mt-2">
                    <li>
                        Laracasts – A series of video tutorials on advanced Laravel topics.
                        <a href="https://laracasts.com/" class="text-blue-500 hover:underline" target="_blank">https://laracasts.com/</a>
                    </li>
                    <li>
                        Traversy Media – YouTube tutorials for implementing authentication in Laravel.
                        <a href="https://www.youtube.com/c/TraversyMedia" class="text-blue-500 hover:underline" target="_blank">https://www.youtube.com/c/TraversyMedia</a>
                    </li>
                </ul>
            </li>

            <li>
                <strong>Open-Source Icons:</strong>
                Icons used in the project were sourced from Font Awesome.
                <a href="https://fontawesome.com/" class="text-blue-500 hover:underline" target="_blank">https://fontawesome.com/</a>
            </li>

            <li>
                <strong>Logo </strong>
                I used this website to create the logo.
                <a href=" https://www.logomaker.com/nl/ " class="text-blue-500 hover:underline" target="_blank">https://www.logomaker.com/nl/</a>
            </li>


            <li>
                <strong>PHP Artisan:</strong>
                The artisan command-line tool was essential for generating migrations, controllers, models, and seeders.
                <a href="https://laravel.com/docs/10.x/artisan" class="text-blue-500 hover:underline" target="_blank">https://laravel.com/docs/10.x/artisan</a>
            </li>
        </ul>

        <h2 class="text-3xl font-semibold text-gray-800 mb-4 mt-6">Project Details</h2>
        <p class="text-lg text-gray-600 mb-6">
            This project was built using Laravel version  11.20.0, with a MySQL database. The site employs a clean architecture by splitting logic across multiple controllers and models. Migrations and seeders ensure that the database is correctly initialized and populated with dummy data for testing purposes. Security features, including middleware for role management and CSRF tokens, are implemented throughout the site.
        </p>

        <h2 class="text-3xl font-semibold text-gray-800 mb-4 mt-6">Acknowledgments</h2>
        <p class="text-lg text-gray-600 mb-6">
            I would like to acknowledge the valuable resources provided by the Laravel community and various online tutorials, which were instrumental in the completion of this project. Their guidance helped me understand complex concepts and implement them effectively in this web application. Additionally, I want to express my deepest gratitude to my parents for their unwavering support throughout this journey, especially my father for closely following my progress. I also want to thank my family members for their valuable feedback and corrections on my work        </p>
    </div>
</x-layout>


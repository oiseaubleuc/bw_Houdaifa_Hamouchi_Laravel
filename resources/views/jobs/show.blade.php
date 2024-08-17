
<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    <div class="container mx-auto py-6">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <div class="flex justify-end">
                    <!-- Download PDF Button -->
                    <a href="{{ route('jobs.pdf', $job) }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 mr-2">
                        Download PDF
                    </a>

                    <!-- Back to Jobs Button -->
                    <a href="{{ route('jobs.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Back to Jobs
                    </a>
                </div>

                <h1 class="text-2xl font-bold mb-4">Job ID: {{ $job->id }}</h1>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Name</h2>
                    <p class="text-gray-700">{{ $job->naam }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">First Name</h2>
                    <p class="text-gray-700">{{ $job->voornaam }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Username</h2>
                    <p class="text-gray-700">{{ $job->username }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Email</h2>
                    <p class="text-gray-700">{{ $job->email }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Type</h2>
                    <p class="text-gray-700">{{ $job->type }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Description</h2>
                    <p class="text-gray-700">{{ $job->beschrijving }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Attachment</h2>
                    @if ($job->bijlage)
                        <a href="{{ asset('storage/' . $job->bijlage) }}" target="_blank" class="text-blue-500 hover:underline">Download Attachment</a>
                    @else
                        <p class="text-gray-700">N/A</p>
                    @endif
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Created At</h2>
                    <p class="text-gray-700">{{ $job->created_at->format('Y-m-d') }}</p>
                </div>

                <div class="flex justify-end">
                    <a href="{{ route('jobs.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Back to Jobs</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>

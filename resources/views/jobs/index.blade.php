<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="space-y-4">

        <table class="min-w-full bg-white border border-gray-300">
            <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Naam</th>
                <th class="py-2 px-4 border-b">Voornaam</th>
                <th class="py-2 px-4 border-b">Username</th>
                <th class="py-2 px-4 border-b">Email</th>
                <th class="py-2 px-4 border-b">Type</th>
                <th class="py-2 px-4 border-b">Beschrijving</th>
                <th class="py-2 px-4 border-b">Bijlage</th>
                <th class="py-2 px-4 border-b">Created At</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($jobs as $job)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $job->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $job->naam }}</td>
                    <td class="py-2 px-4 border-b">{{ $job->voornaam }}</td>
                    <td class="py-2 px-4 border-b">{{ $job->username }}</td>
                    <td class="py-2 px-4 border-b">{{ $job->email }}</td>
                    <td class="py-2 px-4 border-b">{{ $job->type }}</td>
                    <td class="py-2 px-4 border-b">{{ $job->beschrijving }}</td>
                    <td class="py-2 px-4 border-b">
                        @if ($job->bijlage)
                            <a href="{{ asset('storage/' . $job->bijlage) }}" target="_blank">Download</a>
                        @else
                            N/A
                        @endif
                    </td>
                    <td class="py-2 px-4 border-b">{{ $job->created_at->format('Y-m-d') }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('jobs.show', $job) }}" class="text-blue-500 hover:underline">View</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layout>


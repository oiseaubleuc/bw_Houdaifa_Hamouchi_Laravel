<x-layout>
    <x-slot:headings>
job
    </x-slot:headings>


    <ul>

        @foreach($jobs as $job)

            <li>
                <a href="/jobs/3">
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year
                </a>
            </li>
        @endforeach
    </ul>


</x-layout>


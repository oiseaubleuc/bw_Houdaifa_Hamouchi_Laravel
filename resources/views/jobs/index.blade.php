<x-layout>
    <x-slot:headings>
job
    </x-slot:headings>

    <div>
        @foreach($jobs as $job)

            <article>
                <a href="/jobs/{{$job['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year
                </a>
            </article>
        @endforeach
        <div>
            {{$jobs->links()}}
        </div>
    </div>
</x-layout>


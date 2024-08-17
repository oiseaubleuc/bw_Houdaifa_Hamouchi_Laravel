<!DOCTYPE html>
<html>
<head>
    <title>Job Listings</title>
    <style>
        /* Add any styles you want for your PDF here */
        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        img { width: 100px; /* Adjust the size as needed */ }
    </style>
</head>
<body>
<div style="display: flex; align-items: center;">
    <img src="{{ public_path('images/logo.svg') }}" alt="Logo">
    <h1>Job Listings</h1>
</div>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Naam</th>
        <th>Voornaam</th>
        <th>Username</th>
        <th>Email</th>
        <th>Type</th>
        <th>Beschrijving</th>
        <th>Created At</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($jobs as $job)
        <tr>
            <td>{{ $job->id }}</td>
            <td>{{ $job->naam }}</td>
            <td>{{ $job->voornaam }}</td>
            <td>{{ $job->username }}</td>
            <td>{{ $job->email }}</td>
            <td>{{ $job->type }}</td>
            <td>{{ $job->beschrijving }}</td>
            <td>{{ $job->created_at->format('Y-m-d') }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>

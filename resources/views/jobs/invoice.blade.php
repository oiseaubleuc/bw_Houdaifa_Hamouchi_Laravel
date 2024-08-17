<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: left;
            margin-bottom: 20px;
        }
        .header img {
            width: 100px;
            height: auto;
        }
        .content {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="header">
    <img src="{{ public_path('path/to/logo.png') }}" alt="Logo">
</div>
<div class="content">
    <!-- Add your PDF content here -->
    <h1>Invoice</h1>
    <p>Date: {{ now()->format('Y-m-d') }}</p>
    <p>Client: {{ $clientName }}</p>
    <!-- More content... -->
</div>
</body>
</html>

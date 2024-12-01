<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Welcome to Your Dashboard, {{ Auth::user()->name }}</h1>

    @if ($clientForm)
        <h2>Your Submitted Information</h2>
        <p><strong>Username:</strong> {{ $clientForm->username }}</p>
        <p><strong>Email:</strong> {{ $clientForm->email }}</p>

        <h2>Customized Plan</h2>
        <p>{{ $clientForm->plan ?? 'Your plan will be customized soon!' }}</p>
    @else
        <p>No data found for your account. Please contact support.</p>
    @endif
</body>
</html>

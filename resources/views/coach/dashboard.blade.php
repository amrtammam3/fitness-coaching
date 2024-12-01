<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coach Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Welcome, Coach!</h1>
    <h2>Client Forms</h2>

    @if($clientForms->isEmpty())
        <p>No client forms submitted yet.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Plan</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientForms as $form)
                <tr>
                    <td>{{ $form->id }}</td>
                    <td>{{ $form->username }}</td>
                    <td>{{ $form->email }}</td>
                    <td>{{ $form->plan ?? 'No plan yet' }}</td>
                    <td>
                        <a href="{{ route('coach.editPlan', $form->id) }}">Edit Plan</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>

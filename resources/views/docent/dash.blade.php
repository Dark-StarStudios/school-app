<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kinderen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h4 class="mb-4">Overzicht van alle kinderen</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gebruikersnaam</th>
                    <th>Tafel</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kinds as $kind)
                <tr>
                    <td>{{ $kind->idKind }}</td>
                    <td>{{ $kind->gebruikersnaam }}</td>
                    <td>{{ $kind->tafel }}</td>
                    <td>{{ $kind->score }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
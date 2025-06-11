<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kinderen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">Overzicht van alle kinderen</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <!-- <th>ID</th> -->
                                    <th>Naam</th>
                                    <th>Tafel</th>
                                    <th>Score</th>
                                    <th>Bijwerken / Verwijder</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kinds as $kind)
                                <tr>
                                    <!-- <td>{{ $kind->idKind }}</td> -->
                                    <td>{{ $kind->gebruikersnaam }}</td>
                                    <td>{{ $kind->tafel }}</td>
                                    <td>{{ $kind->score }}</td>
                                    <td class="d-flex flex-nowrap align-items-center">
                                        <form action="score/{{ $kind->idScore }}" method="POST" class="d-flex flex-nowrap">
                                            @csrf
                                            @method('PUT')
                                            <input type="number" name="score" value="{{ $kind->score }}" class="form-control" required>
                                            <button type="submit" class="btn btn-primary btn-sm">Bijwerken</button>
                                        </form>
                                        <form action="kindscores/{{ $kind->idKindScore }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger ">Verwijder</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
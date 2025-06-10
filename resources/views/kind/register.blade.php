<!DOCTYPE html>
<html>

<head>
    <title>Nieuw Kind</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">Voeg nieuw Kind toe</h4>
                    </div>
                    <div class="card-body">
                        <form action="/kinds" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="gebruikersnaam" class="form-label">Gebruikersnaam:</label>
                                <input type="text" name="gebruikersnaam" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="wachtwoord" class="form-label">Wachtwoord:</label>
                                <input type="password" name="wachtwoord" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-success w-100">Login</button>
                            <a href="{{ route('kind.login') }}" class="btn btn-secondary w-100 mt-2">Terug naar login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
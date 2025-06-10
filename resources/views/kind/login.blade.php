<!DOCTYPE html>
<html>

<head>
    <title>Kind Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow p-4" style="min-width: 350px;">
            <h2 class="mb-4 text-center">Login Kind</h2>

            @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
            @endif

            <form method="POST" action="{{ route('kind.login') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Gebruikersnaam:</label>
                    <input type="text" name="gebruikersnaam" class="form-control" value="{{ old('gebruikersnaam') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Wachtwoord:</label>
                    <input type="password" name="wachtwoord" class="form-control">
                </div>

                <button type="submit" class="btn btn-success w-100">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
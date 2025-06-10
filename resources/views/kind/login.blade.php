<!DOCTYPE html>
<html>

<head>
    <title>Kind Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header text-center bg-success text-white">
                        <h3>Login Kind</h3>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                        @endif

                        <form method="POST" action="{{ route('kind.login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="gebruikersnaam" class="form-label">Gebruikersnaam:</label>
                                <input type="text" class="form-control" id="gebruikersnaam" name="gebruikersnaam" value="{{ old('gebruikersnaam') }}" required autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="wachtwoord" class="form-label">Wachtwoord:</label>
                                <input type="password" class="form-control" id="wachtwoord" name="wachtwoord" required>
                            </div>

                            <button type="submit" class="btn btn-success w-100">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Nieuw Docent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">Voeg nieuw Docent toe</h4>
                    </div>
                    <div class="card-body">
                        <form action="/docents" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Naam:</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Wachtwoord:</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-success w-100">Login</button>
                            <a href="{{ route('docent.login') }}" class="btn btn-secondary w-100 mt-2">Terug naar login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
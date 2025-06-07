<!DOCTYPE html>
<html>
<head>
    <title>Kind Login</title>
</head>
<body>
    <h1>Login Kind</h1>

    @if ($errors->any())
        <div style="color:red;">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('kind.login') }}">
        @csrf

        <label>Gebruikersnaam:</label><br>
        <input type="text" name="gebruikersnaam" value="{{ old('gebruikersnaam') }}"><br><br>

        <label>Wachtwoord:</label><br>
        <input type="password" name="wachtwoord"><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>

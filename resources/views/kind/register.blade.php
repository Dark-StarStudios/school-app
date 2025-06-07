<!DOCTYPE html>
<html>
<head>
    <title>Nieuw Kind</title>
</head>
<body>
    <h1>Voeg nieuw kind toe</h1>

    <form action="/kinds" method="POST">
        @csrf

        <label for="gebruikersnaam">Gebruikersnaam:</label><br>
        <input type="text" name="gebruikersnaam" required><br><br>

        <label for="wachtwoord">Wachtwoord:</label><br>
        <input type="password" name="wachtwoord" required><br><br>

        <button type="submit">Opslaan</button>
    </form>
</body>
</html>

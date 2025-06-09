<!DOCTYPE html>
<html>
<head>
    <title>Nieuw Docent</title>
</head>
<body>
    <h1>Voeg nieuw Docent toe</h1>

   <form action="/docents" method="POST">
        @csrf

        <label for="name">Naam:</label><br>
        <input type="text" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label for="password">Wachtwoord:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Opslaan</button>
    </form>

</body>
</html>

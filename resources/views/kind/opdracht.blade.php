<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Tafeltjes oefenen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-5">
    <div class="container">
        <h2>Oefenen van tafeltjes</h2>
        @if (!isset($_POST['idTafeltje']))
        <form method="POST" action="/opdracht" class="mb-4">
            @csrf
            <div class="mb-3">
                <label for="tafeltje" class="form-label">Kies een tafeltje:</label>
                <select name="idTafeltje" id="tafeltje" class="form-select" required>
                    @foreach ($tafels as $tafel)
                    <option value="{{ $tafel->idTafeltje }}" {{ (old('idTafeltje') == $tafel->idTafeltje) ? 'selected' : '' }}>
                        {{ $tafel->nummer }}-tafel
                    </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Start oefening</button>
        </form>
        @endif
        @if (!empty($vragen))
        <h4>20 vragen met de {{ $gekozenTafel }}-tafel</h4>
        <form method="POST" action="/opdracht" class="container">
            @csrf
            <div class="d-flex justify-content-start flex-wrap ">
                <input type="hidden" name="idTafeltje" value="{{$gekozenTafel}}" >
                @foreach ($vragen as $vraag)
                <div class="p-3 m-1 rounded shadow">
                    {{ $vraag['vraag'] }} =
                    <input type="number" class="form-control d-inline-block" style="width: 100px;" name="antwoord[]" required>
                    <input type="hidden" name="juisteAntwoord[]" value="{{ $vraag['juisteAntwoord'] }}">
                </div>
                @endforeach
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Klaar</button>
        </form>
        @endif
    </div>
</body>

</html>
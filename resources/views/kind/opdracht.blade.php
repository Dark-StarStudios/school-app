<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Tafeltjes oefenen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">Oefenen van tafeltjes</h4>
                    </div>
                    <div class="card-body">
                        @if (isset($_GET['score']))
                        <div class="alert alert-success">
                            Je score is: {{ $_GET['score'] }}
                        </div>
                        @endif

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
                            <button type="submit" class="btn btn-success w-100">Start oefening</button>
                        </form>
                        @endif

                        @if (!empty($vragen))
                        <h5 class="mb-3">20 vragen met de {{ $gekozenTafel }}-tafel</h5>
                        <form method="POST" action="/opdracht">
                            @csrf
                            <input type="hidden" name="idTafeltje" value="{{$gekozenTafel}}">
                            <div class="row">
                                @foreach ($vragen as $vraag)
                                <div class="col-md-6 mb-3">
                                    <div class="p-3 rounded border bg-light">
                                        <label class="form-label">{{ $vraag['vraag'] }} =</label>
                                        <input type="number" class="form-control d-inline-block" style="width: 100px;" name="antwoord[]" required>
                                        <input type="hidden" name="juisteAntwoord[]" value="{{ $vraag['juisteAntwoord'] }}">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-success w-100">Klaar</button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
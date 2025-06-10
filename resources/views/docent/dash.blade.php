<div class="row mt-4">
    <div class="col">
        <h4>Overzicht van alle kinderen</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gebruikersnaam</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kinds as $kind)
                <tr>
                    <td>{{ $kind->idKind }}</td>
                    <td>{{ $kind->gebruikersnaam }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
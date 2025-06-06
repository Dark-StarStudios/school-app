<?php

namespace App\Http\Controllers;

use App\Models\Kind;
use Illuminate\Http\Request;

class KindController extends Controller
{
    // GET /kinds — lijst van all kinds
    public function index()
    {
        return Kind::all();
    }

    // POST /kinds — nieuw maken
    public function store(Request $request)
    {
        $validated = $request->validate([
            'gebruikersnaam' => 'required|string',
            'wachtwoord' => 'required|string',
        ]);

        $kind = Kind::create($validated);

        return response()->json($kind, 201);
    }

    // GET /kinds/{id} — laat een zien
    public function show($id)
    {
        $kind = Kind::findOrFail($id);
        return response()->json($kind);
    }

    // PUT /kinds/{id} — update
    public function update(Request $request, $id)
    {
        $kind = Kind::findOrFail($id);

        $validated = $request->validate([
            'gebruikersnaam' => 'sometimes|string',
            'wachtwoord' => 'sometimes|string',
        ]);

        $kind->update($validated);

        return response()->json($kind);
    }

    // DELETE /kinds/{id} — verwijderen
    public function destroy($id)
    {
        $kind = Kind::findOrFail($id);
        $kind->delete();

        return response()->json(['message' => 'Verwijderd'], 204);
    }
}

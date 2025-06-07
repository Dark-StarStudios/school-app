<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
            'gebruikersnaam' => 'required|string|max:255',
            'wachtwoord' => 'required|string',
        ]);
         $validated['wachtwoord'] = Hash::make($validated['wachtwoord']);

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
    public function loginForm()
    {
        return view('kind.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'gebruikersnaam' => 'required|string',
            'wachtwoord' => 'required|string',
        ]);

        $kind = Kind::where('gebruikersnaam', $request->gebruikersnaam)->first();

        if ($kind && Hash::check($request->wachtwoord, $kind->wachtwoord)) {
            
            Session::put('kind_id', $kind->idKind);
            return redirect('/')->with('success', 'Ingelogd als ' . $kind->gebruikersnaam);
        }

        return back()->withErrors(['gebruikersnaam' => 'Ongeldige inloggegevens'])->withInput();
    }
}

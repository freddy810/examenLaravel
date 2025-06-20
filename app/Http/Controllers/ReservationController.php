<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Trajet;
use App\Models\Vehicule;
use App\Models\Chauffeur;
use App\Models\Admninistration;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::with(['trajet', 'vehicule', 'chauffeur', 'administration'])->get();
        return view('reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trajets = Trajet::all();
        $vehicules = Vehicule::all();
        $chauffeurs = Chauffeur::all();
        $passagers = Admninistration::all();

        return view('reservations.create', compact('trajets', 'vehicules', 'chauffeurs', 'passagers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'trajet_id' => 'required|exists:trajets,id',
            'vehicule_id' => 'required|exists:vehicules,id',
            'chauffeur_id' => 'required|exists:chauffeurs,id',
            'statut' => 'required|string',
            'passagers' => 'nullable|array',
            'passagers.*' => 'exists:admninistrations,id',
        ]);

        $reservation = Reservation::create([
            'date' => $request->date,
            'trajet_id' => $request->trajet_id,
            'vehicule_id' => $request->vehicule_id,
            'chauffeur_id' => $request->chauffeur_id,
            'statut' => $request->statut,
        ]);

        if ($request->has('passagers')) {
            $reservation->administration()->attach($request->passagers);
        }

        return redirect()->route('reservations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        $trajets = Trajet::all();
        $vehicules = Vehicule::all();
        $chauffeurs = Chauffeur::all();
        $passagers = Admninistration::all();

        $reservation->load(['trajet', 'vehicule', 'chauffeur', 'administration']);
        return view('reservations.show', compact('reservation', 'trajets', 'vehicules', 'chauffeurs', 'passagers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        $trajets = Trajet::all();
        $vehicules = Vehicule::all();
        $chauffeurs = Chauffeur::all();
        $passagers = Admninistration::all();
        $reservation->load('administration');

        return view('reservations.edit', compact('reservation', 'trajets', 'vehicules', 'chauffeurs', 'passagers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'date' => 'required|date',
            'trajet_id' => 'required|exists:trajets,id',
            'vehicule_id' => 'required|exists:vehicules,id',
            'chauffeur_id' => 'required|exists:chauffeurs,id',
            'statut' => 'required|string',
            'passagers' => 'nullable|array',
            'passagers.*' => 'exists:admninistrations,id',
        ]);

        $reservation->update([
            'date' => $request->date,
            'trajet_id' => $request->trajet_id,
            'vehicule_id' => $request->vehicule_id,
            'chauffeur_id' => $request->chauffeur_id,
            'statut' => $request->statut,
        ]);

        $reservation->passagers()->sync($request->passagers ?? []);

        return redirect()->route('reservations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->administration()->detach();
        $reservation->delete();

        return redirect()->route('reservations.index');
    }
}

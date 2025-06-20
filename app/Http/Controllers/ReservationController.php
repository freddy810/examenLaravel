<?php

namespace App\Http\Controllers;

use App\Models\Admninistration;
use App\Models\Chauffeur;
use App\Models\Reservation;
use App\Models\Trajet;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reservations.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trajets = Trajet::all();
        $vehicules = Vehicule::all();
        $chauffeurs = Chauffeur::all();
        $administrations = Admninistration::all();
        return view('reservations.create', compact('trajets', 'vehicules', 'chauffeurs', 'administrations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date'=>'required',
            'trajet_id'=>'required|exists:trajets,id',
            'vehicule_id'=>'required|exists:vehicules,id',
            'chauffeur_id'=>'required|exists:chauffeurs,id',
            'administrations'=>'required|array',
            'statut'=>'required',
        ]);

        Reservation::create($request->all());
        return redirect()->route('reservations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        return view('reservations.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        return view('reservations.edit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'date'=>'required',
            'statut'=>'required',
        ]);

        $reservation->update($request->all());
        return redirect()->route('reservations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('reservations.index');
    }
}

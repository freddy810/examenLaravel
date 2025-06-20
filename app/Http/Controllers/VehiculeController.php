<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicules = Vehicule::paginate(5);
        return view('vehicules.index', compact('vehicules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vehicules.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'immatriculation'=>'required',
            'marque'=>'required',
            'modele'=>'required',
            'statut'=>'required',
        ]);

        Vehicule::create($request->all());
        return redirect()->route('vehicules.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicule $vehicule)
    {
        return view('vehicules.show', compact('vehicule'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicule $vehicule)
    {
        return view('vehicules.edit', compact('vehicule'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicule $vehicule)
    {
        $request->validate([
            'immatriculation'=>'required',
            'marque'=>'required',
            'modele'=>'required',
            'statut'=>'required',
        ]);

        $vehicule->update($request->all());
        return redirect()->route('vehicules.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicule $vehicule)
    {
        $vehicule->delete();
        return redirect()->route('vehicules.index');
    }
}

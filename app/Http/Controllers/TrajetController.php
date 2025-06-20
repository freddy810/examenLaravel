<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use Illuminate\Http\Request;

class TrajetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trajets = Trajet::paginate(5);
        return view('trajets.index', compact('trajets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trajets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'depart'=>'required',
            'destination'=>'required',
            'duree_estimee'=>'required',
        ]);

        Trajet::create($request->all());
        return redirect()->route('trajets.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trajet $trajet)
    {
        return view('trajets.show', compact('trajet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trajet $trajet)
    {
        return view('trajets.edit', compact('trajet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trajet $trajet)
    {
        $request->validate([
            'depart'=>'required',
            'destination'=>'required',
            'duree_estimee'=>'required',
        ]);

        $trajet->update($request->all());
        return redirect()->route('trajets.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trajet $trajet)
    {
        $trajet->delete();
        return redirect()->route('trajets.index');
    }
}

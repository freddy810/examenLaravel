
@extends('layouts.app')
@section('title', 'Creation vehicule')
@section('jumb', 'Clients')
@section('content')


        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6 bg-light mt-4 p-4">
                <form action="{{route('vehicules.store')}}" method="POST">
                @csrf 
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="immatriculation" class="form-label">immatriculation</label>
                            <input type="text" name="immatriculation" id="immatriculation" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="marque" class="form-label">marque</label>
                            <input type="text" name="marque" id="marque" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="modele" class="form-label">modele</label>
                            <input type="text" name="modele" id="modele" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="statut" class="form-label">statut</label>
                            <select name="statut" id="statut" class="form-control">
                                <option value="disponible">Disponible</option>
                                <option value="en reparation">En Réparation</option>
                                <option value="en mission">En Mission</option>
                            </select>
                        </div>
                    </div>

                    <div class="bouton mt-3" style="float: right;">
                        <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
                        <a type="button" href="{{route('vehicules.index')}}" class="btn btn-danger mt-3">Annuler</a>
                    </div>
                </form>
            </div>
        </div>

  @endsection

 
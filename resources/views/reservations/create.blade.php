
@extends('layouts.app')
@section('title', 'Creation vehicule')
@section('jumb', 'Clients')
@section('content')


        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6 bg-light mt-4 p-4">
                <form action="{{route('reservations.store')}}" method="POST">
                @csrf 
                <div class="mb-3">
            <label for="date" class="form-label">Date de réservation</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="trajet_id" class="form-label">Trajet</label>
            <select name="trajet_id" id="trajet_id" class="form-select" required>
                <option value="">-- Choisir un trajet --</option>
                @foreach($trajets as $trajet)
                    <option value="{{ $trajet->id }}">
                        {{ $trajet->destination }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="vehicule_id" class="form-label">Véhicule</label>
            <select name="vehicule_id" id="vehicule_id" class="form-select" required>
                <option value="">-- Choisir un véhicule --</option>
                @foreach($vehicules as $vehicule)
                    <option value="{{ $vehicule->id }}">
                        {{ $vehicule->immatriculation }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="chauffeur_id" class="form-label">Chauffeur</label>
            <select name="chauffeur_id" id="chauffeur_id" class="form-select" required>
                <option value="">-- Choisir un chauffeur --</option>
                @foreach($chauffeurs as $chauffeur)
                    <option value="{{ $chauffeur->id }}">
                        {{ $chauffeur->nom }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="statut" class="form-label">Statut</label>
            <input type="text" name="statut" id="statut" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="passagers" class="form-label">Passagers</label>
            <select name="passagers[]" id="passagers" class="form-select" multiple>
                @foreach($passagers as $passager)
                    <option value="{{ $passager->id }}">
                        {{ $passager->nom }}
                    </option>
                @endforeach
            </select>
            <div class="form-text">Utilisez Ctrl (ou Cmd) + clic pour sélectionner plusieurs passagers.</div>
        </div>

                    <div class="bouton mt-3" style="float: right;">
                        <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
                        <a type="button" href="{{route('reservations.index')}}" class="btn btn-danger mt-3">Annuler</a>
                    </div>
                </form>
            </div>
        </div>

  @endsection

 
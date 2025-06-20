
@extends('layouts.app')
@section('title', 'Creation vehicule')
@section('jumb', 'Clients')
@section('content')


        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6 bg-light mt-4 p-4">
                <form action="{{route('reservations.update', $reservation->id)}}" method="POST">
                @csrf 
                @method('PUT')
                <div class="mb-3">
            <label for="date" class="form-label">Date de réservation</label>
            <input type="date" name="date" id="date" class="form-control" value="{{ old('date', $reservation->date) }}" required>
        </div>

        <div class="mb-3">
            <label for="trajet_id" class="form-label">Trajet</label>
            <select name="trajet_id" id="trajet_id" class="form-select" required>
                @foreach($trajets as $trajet)
                    <option value="{{ $trajet->id }}" {{ old('trajet_id', $reservation->trajet_id) == $trajet->id ? 'selected' : '' }}>
                        {{ $trajet->destination }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="vehicule_id" class="form-label">Véhicule</label>
            <select name="vehicule_id" id="vehicule_id" class="form-select" required>
                @foreach($vehicules as $vehicule)
                    <option value="{{ $vehicule->id }}" {{ old('vehicule_id', $reservation->vehicule_id) == $vehicule->id ? 'selected' : '' }}>
                        {{ $vehicule->immatriculation }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="chauffeur_id" class="form-label">Chauffeur</label>
            <select name="chauffeur_id" id="chauffeur_id" class="form-select" required>
                @foreach($chauffeurs as $chauffeur)
                    <option value="{{ $chauffeur->id }}" {{ old('chauffeur_id', $reservation->chauffeur_id) == $chauffeur->id ? 'selected' : '' }}>
                        {{ $chauffeur->nom }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="statut" class="form-label">Statut</label>
            <input type="text" name="statut" id="statut" class="form-control" value="{{ old('statut', $reservation->statut) }}" required>
        </div>

        <div class="mb-3">
            <label for="passagers" class="form-label">Passagers</label>
            <select name="passagers[]" id="passagers" class="form-select" multiple>
                @foreach($passagers as $passager)
                    <option value="{{ $passager->id }}"
                        {{ in_array($passager->id, old('passagers', $reservation->administration->pluck('id')->toArray())) ? 'selected' : '' }}>
                        {{ $passager->nom }}
                    </option>
                @endforeach
            </select>
            <div class="form-text">Utilisez Ctrl (ou Cmd) + clic pour sélectionner plusieurs passagers.</div>
        </div>

                    <div class="bouton mt-3" style="float: right;">
                        <a type="button" href="{{route('reservations.index')}}" class="btn btn-primary mt-3">OK</a>
                    </div>
                </form>
            </div>
        </div>

  @endsection

 
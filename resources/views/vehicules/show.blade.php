
@extends('layouts.app')
@section('title', 'Affichage Client')
@section('jumb', 'Clients')
@section('content')


        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6 bg-light mt-4 p-4">
                <form action="#" method="POST">
                @csrf 
                <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="immatriculation" class="form-label">immatriculation</label>
                            <input type="text" name="immatriculation" id="immatriculation" class="form-control" value="{{old('immatriculation', $vehicule->immatriculation)}}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="marque" class="form-label">marque</label>
                            <input type="text" name="marque" id="marque" class="form-control" value="{{old('marque', $vehicule->marque)}}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="modele" class="form-label">modele</label>
                            <input type="text" name="modele" id="modele" class="form-control" value="{{old('modele', $vehicule->modele)}}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="statut" class="form-label">statut</label>
                            <input type="text" name="statut" id="statut" class="form-control" value="{{old('statut', $vehicule->statut)}}">
                        </div>
                    </div>

                    <div class="bouton mt-3" style="float: right;">
                        <a type="button" href="{{route('vehicules.index')}}" class="btn btn-primary mt-3">OK</a>
                    </div>
                </form>
            </div>
        </div>

  @endsection

 

@extends('layouts.app')
@section('title', 'Affichage Client')
@section('jumb', 'Clients')
@section('content')


        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6 bg-light mt-4 p-4">
            <form action="{{route('chauffeurs.update', $chauffeur->id)}}" method="POST">
                @csrf 
                @method('PUT')
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="nom" class="form-label">nom</label>
                            <input type="text" name="nom" id="nom" class="form-control" value="{{old('nom', $chauffeur->nom)}}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="contact" class="form-label">contact</label>
                            <input type="text" name="contact" id="contact" class="form-control" value="{{old('contact', $chauffeur->contact)}}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="disponibilite" class="form-label">disponibilite</label>
                            <input type="text" name="disponibilite" id="disponibilite" class="form-control" value="{{old('disponibilite', $chauffeur->disponibilite)}}">
                        </div>
                    </div>

                    <div class="bouton mt-3" style="float: right;">
                        <a type="button" href="{{route('vehicules.index')}}" class="btn btn-primary mt-3">OK</a>
                    </div>
                </form>
            </div>
        </div>

  @endsection

 
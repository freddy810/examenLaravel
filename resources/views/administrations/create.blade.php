
@extends('layouts.app')
@section('title', 'Creation vehicule')
@section('jumb', 'Clients')
@section('content')


        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6 bg-light mt-4 p-4">
                <form action="{{route('administrations.store')}}" method="POST">
                @csrf 
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="nom" class="form-label">nom</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="prenom" class="form-label">prenom</label>
                            <input type="text" name="prenom" id="prenom" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="contact" class="form-label">contact</label>
                            <input type="text" name="contact" id="contact" class="form-control" step="1">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="email" class="form-label">email</label>
                            <input type="text" name="email" id="email" class="form-control" step="1">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="adresse" class="form-label">adresse</label>
                            <input type="text" name="adresse" id="adresse" class="form-control" step="1">
                        </div>
                    </div>

                    <div class="bouton mt-3" style="float: right;">
                        <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
                        <a type="button" href="{{route('administrations.index')}}" class="btn btn-danger mt-3">Annuler</a>
                    </div>
                </form>
            </div>
        </div>

  @endsection

 
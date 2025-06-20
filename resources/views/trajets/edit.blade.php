
@extends('layouts.app')
@section('title', 'Creation vehicule')
@section('jumb', 'Clients')
@section('content')


        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6 bg-light mt-4 p-4">
                <form action="{{route('trajets.update', $trajet->id)}}" method="POST">
                @csrf 
                @method('PUT')
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="depart" class="form-label">depart</label>
                            <input type="date" name="depart" id="depart" class="form-control" value="{{old('depart', $trajet->depart)}}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="destination" class="form-label">destination</label>
                            <input type="text" name="destination" id="destination" class="form-control" value="{{old('destination', $trajet->destination)}}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="duree_estimee" class="form-label">duree_estimee</label>
                            <input type="times" name="duree_estimee" id="duree_estimee" class="form-control" value="{{old('duree_estimee', $trajet->duree_estimee)}}">
                        </div>
                    </div>

                    <div class="bouton mt-3" style="float: right;">
                        <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
                        <a type="button" href="{{route('trajets.index')}}" class="btn btn-danger mt-3">Annuler</a>
                    </div>
                </form>
            </div>
        </div>

  @endsection

 
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
    protected $fillable = ['immatriculation', 'marque', 'modele', 'statut'];

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}

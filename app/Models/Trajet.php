<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    use HasFactory;
    protected $fillable = ['depart', 'destination', 'duree_estimee'];

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}

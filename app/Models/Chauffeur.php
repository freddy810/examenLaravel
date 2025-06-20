<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'contact', 'disponibilite'];

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}

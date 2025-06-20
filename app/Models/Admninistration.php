<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admninistration extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'contact', 'email', 'adresse'];
}

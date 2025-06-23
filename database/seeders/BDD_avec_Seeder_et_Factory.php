<?php

namespace Database\Seeders;

use App\Models\Admninistration;
use App\Models\Chauffeur;
use App\Models\Reservation;
use App\Models\Trajet;
use App\Models\Vehicule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BDD_avec_Seeder_et_Factory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creation des entités de base
        $vehicules = Vehicule::factory(5)->create();
        $chauffeurs = Chauffeur::factory(5)->create();
        $trajets = Trajet::factory(5)->create();
        $administrations = Admninistration::factory(5)->create();

        // Creation des réservations
        Reservation::factory(5)->create()->each(function ($reservation) use ($vehicules, $chauffeurs, $trajets, $administrations) {
            $reservation->vehicule_id = $vehicules->random()->id;
            $reservation->chauffeur_id = $chauffeurs->random()->id;
            $reservation->trajet_id = $trajets->random()->id;
            $reservation->save();

            // Pour les relations administrations et reservations (many to many)
            $reservation->administration()->attach(
                $administrations->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}

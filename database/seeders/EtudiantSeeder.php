<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Etudiant::create([
            'matricule'=>'20V2412',
            'nom'=>'Essola Essola',
            'prenom'=>'Joseph Julien',
            'dateNaissance'=>'20/05/1999',
            'lieuNaissance'=>'Bondjock',
            'estNiveau'=>'true'
        ]);
        Etudiant::create([
            'matricule'=>'20R2412',
            'nom'=>'Ezo\'o',
            'prenom'=>'David',
            'dateNaissance'=>'20/05/2001',
            'lieuNaissance'=>'Makak',
            'estNiveau'=>'filiere'
        ]);
    }
}

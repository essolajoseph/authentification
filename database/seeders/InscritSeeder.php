<?php

namespace Database\Seeders;

use App\Models\Inscrit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InscritSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inscrit::create([
           'matEtudiant'=>'20V2412',
           'code'=>'ICT4D'
        ]);
        Inscrit::create([
            'matEtudiant'=>'20R2412',
            'code'=>'INFO'
         ]);
    }
}

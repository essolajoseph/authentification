<?php

namespace Database\Seeders;

use App\Models\Filiere;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Filiere::create([
           'code'=>'ICT4D',
           'nomFiliere'=>'Information and Communication technology for development',          
        ]);
        Filiere::create([
            'code'=>'INFO',
            'nomFiliere'=>'Informatique Fondamentale',          
         ]);
    }
}

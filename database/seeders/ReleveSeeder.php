<?php

namespace Database\Seeders;

use App\Models\Releve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Releve::create([
            'chaine'=>'20R2198'
        ]);
        Releve::create([
            'chaine'=>'20V2412'
        ]);
        Releve::create([
            'chaine'=>'20V3412'
        ]);
    }
}

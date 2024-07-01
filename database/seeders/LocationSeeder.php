<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations=[
            'Turkmenistan Univermag',
            'Mir-1',
            'Anev',
        ]);
        foreach ($locations as $location_1){
            locations::create([
                'name' => $location_1,
            ]);
        }
    }
}

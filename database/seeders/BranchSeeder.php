<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs=[
            'Beginner',
            'Elementary',
            'Pre-Intermediate',
            'Intermediate',
            'Upper-Intermediate',
        ];

        foreach ($objs as $obj){
            branch::create([
                'name'-> $obj,
            ]);
        }
    }
}

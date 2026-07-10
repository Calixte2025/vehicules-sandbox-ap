<?php

namespace Database\Seeders;

use App\Models\Vehicule;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Vehicule::factory()->count(5000)->create();
    }
}
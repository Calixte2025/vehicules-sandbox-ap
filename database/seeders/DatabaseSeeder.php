<?php

namespace Database\Seeders;

use App\Models\Vehicule;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('TRUNCATE TABLE vehicules RESTART IDENTITY CASCADE');
        Vehicule::factory()->count(5000)->create();
    }
}
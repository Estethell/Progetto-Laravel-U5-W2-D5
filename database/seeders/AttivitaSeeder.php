<?php

namespace Database\Seeders;


use App\Models\Attivita;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AttivitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 30; $i++) {
            Attivita::create([
                'name' => fake()->words(rand(3, 10), true),
            ]);
        }
    }
}
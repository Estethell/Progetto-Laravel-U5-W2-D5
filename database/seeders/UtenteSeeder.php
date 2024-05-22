<?php

namespace Database\Seeders;


use App\Models\Utente;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UtenteSeeder extends Seeder
{
   
    public function run(): void
    {

        Utente::factory()->create([
            'name' => 'Asdf User',
            
        ]);

        Utente::factory(100)->create();

    }
    
}
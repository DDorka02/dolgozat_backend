<?php

namespace Database\Seeders;

use App\Models\Kategoria;
use App\Models\Tevekenyseg;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */

        Tevekenyseg::created([
            'kat_id'=> 1,
            'tev_nev'=> '1. teendő',
            'allapot'=> false,
        ]);
        Tevekenyseg::created([
            'kat_id'=> 2,
            'tev_nev'=> '2. teendő',
            'allapot'=> false,
        ]);
        Tevekenyseg::created([
            'kat_id'=> 3,
            'tev_nev'=> '3. teendő',
            'allapot'=> false,
        ]);

        Kategoria::created([
            'katnev'=> 'Házimunka'
        ]);

        Kategoria::created([
            'katnev'=> 'Iskola'
        ]);
        Kategoria::created([
            'katnev'=> 'Egyéb'
        ]);

  
}
}
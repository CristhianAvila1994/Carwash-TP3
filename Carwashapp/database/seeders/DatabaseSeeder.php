<?php

namespace Database\Seeders;

use App\Models\Carro;
use App\Models\Cliente;
use App\Models\Personalavo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            CarroSeeder::class,
            ClienteSeeder::class,
            PersonalavoSeeder::class

        ]);
    }
}

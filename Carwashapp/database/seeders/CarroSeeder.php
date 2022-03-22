<?php

namespace Database\Seeders;

use App\Models\Carro;
use Illuminate\Database\Seeder;

class CarroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carro::factory(500)->create();
    }
}

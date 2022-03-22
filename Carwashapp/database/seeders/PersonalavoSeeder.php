<?php

namespace Database\Seeders;

use App\Models\Personalavo;
use Illuminate\Database\Seeder;

class PersonalavoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Personalavo::factory(500)->create();
    }
}

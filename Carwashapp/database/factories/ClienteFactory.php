<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{

    /**
     *The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model=Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name,
            'identidad'=>$this->faker->ean13(),
            'direccion'=>$this->faker->address,
            'fotocar'=>$this->faker->imageUrl($width = 640, $height = 480),
            'placa'=>$this->faker->swiftBicNumber(),
            'telefono'=>$this->faker->tollFreePhoneNumber,
            'email'=>$this->faker->email(),
            'totalPago'=>$this->faker->numberBetween($min = 50, $max = 350)
        ];
    }
}

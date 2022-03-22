<?php

namespace Database\Factories;

use App\Models\Carro;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarroFactory extends Factory
{

    /**
     *The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model=Carro::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fotoCarro'=>$this->faker->imageUrl($swid = 640, $height = 480),
            'nombreCliente'=>$this->faker->name,
            'identidad del dueño'=>$this->faker->ean13(),
            'placaCarro'=>$this->faker->swiftBicNumber(),
            'año'=>$this->faker->year($max = 'now'),
            'modeloCarro'=>$this->faker->text(),
            'tipoCarro'=>$this->faker->randomElement($array = array ('Camioneta','Turismo','pickup','camion','DobleCabina'))
            
    
        ];
    }
}

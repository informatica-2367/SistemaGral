<?php

namespace Database\Factories\Modules\Clientes\Models;

use App\Modules\Clientes\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    protected $model = Cliente::class;

    public function definition()
    {
        return [
            'nombre'             => $this->faker->name,
            'numero_de_telefono' => $this->faker->phoneNumber,
            'edad'               => $this->faker->numberBetween(18, 99),
            'sexo'               => $this->faker->randomElement(['M', 'F', 'O']),
            'estatus'            => $this->faker->randomElement([1, 0]),
            'calle'              => $this->faker->streetName,
            'numero_exterior'    => $this->faker->buildingNumber,
            'numero_interior'    => $this->faker->optional()->buildingNumber, // Número interior puede ser opcional
            'colonia'            => $this->faker->word,
            'ciudad'             => $this->faker->city,
            'estado'             => $this->faker->state,
            'codigo_postal'      => $this->faker->postcode,
            'pais'               => $this->faker->country,
            'fecha_de_creacion'  => $this->faker->dateTimeThisYear(),
            'fecha_de_actualizacion' => $this->faker->dateTimeThisYear(),
        ];
    }
}

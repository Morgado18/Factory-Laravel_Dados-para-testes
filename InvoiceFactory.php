<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        // AQUI

        $paid = $this->faker->boolean(); /* geração de dados de payment fictícios para testes, utilizando a biblioteca Faker*/
        return [
            'user_id' => User::all()->random()->id,
            'type' => $this->faker->randomElement(['B','C','P','EXPRESS','BAI DIREITO']),
            'paid' => $paid,
            'value' => $this->faker->numberBetween(1000,10000),
            'payment_date' => $paid ? $this->faker->randomElement([$this->faker->datetimeThisMonth()]) : NULL
        ];

     // FIM AQUI
    }
}

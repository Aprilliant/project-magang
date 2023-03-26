<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use app\Models\data_nasabah;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\data_nasabah>
 */
class data_nasabahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'no_kredit' => $this->faker->creditCardNumber(),
            'updated_at' => $this->faker->dateTime(),
            'no_hp' => $this->faker->phoneNumber(),
            'hari_tunggakan' => $this->faker->numberBetween(1, 30),
            'osl' => $this->faker->numberBetween(1000000, 5000000),
            'angsuran' => $this->faker->numberBetween(500000, 1000000),
            'kewajiban' => $this->faker->numberBetween(5000000, 10000000)
        ];
    }
}

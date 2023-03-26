<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\data_Pegawai>
 */
class data_PegawaiFactory extends Factory
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
            'nomor_identitas' => $this->faker->creditCardNumber(),
            'alamat' => $this->faker->address(),
            'nomor_telepon' => $this->faker->phoneNumber(),

        ];
    }
}

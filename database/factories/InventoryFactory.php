<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryFactory extends Factory
{
    public function definition()
    {
        return [
            "nama_user" => $this->faker->name(),
            "nama_bagian" => $this->faker->sentence(),
            "th_pembelian" => $this->faker->year(),
            "kode" => $this->faker->sentence(),
            "ram" => $this->faker->sentence(),
            "cpu" => $this->faker->sentence(),
            "merk" => $this->faker->sentence(),
        ];
    }
}

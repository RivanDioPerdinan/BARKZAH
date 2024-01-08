<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sku'                   => Str::random(10),
            'nama_produk'          => fake()->name(),
            'tipe'                  => "Motor",
            'kategori'              => "Trail",
            'harga'                 => 197000000,
            'quantity'              => 10,
            'diskon'              => 10 / 100,
            'tersedia'             => 1,
            'foto'                  => fake()->name(),
        ];
    }
}

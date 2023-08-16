<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Mahasiswa2022;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa2022>
 */
class Mahasiswa2022Factory extends Factory
{
    protected $model = Mahasiswa2022::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'NIM' => $this->faker->unique()->regexify('[0-9]{14}'),
            'name' => $this->faker->name,
        ];
    }
}

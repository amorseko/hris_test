<?php

namespace Database\Factories;

use App\Models\Departement;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Departement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'division_id' => \App\Models\Division::factory(),
        ];
    }
}

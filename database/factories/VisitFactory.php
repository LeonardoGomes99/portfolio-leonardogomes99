<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VisitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->uuid(),
            'ip' => $this->faker->ipv4(),
            'browser' => $this->faker->chrome(),
            'os' => 'UBUNTU',
        ];
    }
}

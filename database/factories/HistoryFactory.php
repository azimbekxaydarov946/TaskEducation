<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\History>
 */
class HistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'contract_id'=>$this->faker->numberBetween(1,10),
            'credit_id'=>$this->faker->numberBetween(1,10),
            'student_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}

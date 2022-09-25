<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Credit>
 */
class CreditFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $amount=$this->faker->numberBetween(100000,4000000);
        return [
            'contract_id'=>$this->faker->numberBetween(1,10),
            'amount_paid'=>$amount,
            'credit'=>6382800-$amount,
            'student_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}

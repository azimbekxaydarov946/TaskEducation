<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contract>
 */
class ContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $pay_type = ['Stipendiyasiz', 'Stipendiyali'];
        return [
            'start_date' => $this->faker->date('Y-m-d', 2000),
            'end_date' => $this->faker->date(),
            'contract_form' => $this->faker->numberBetween(2, 3) . ' - tomonlama',
            'pay_type' => $pay_type[$this->faker->numberBetween(0, 1)],
            'pay_amount' =>6382800,
            'student_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}

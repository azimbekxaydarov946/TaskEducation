<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name'=>$this->faker->firstName(),
            'last_name'=>$this->faker->lastName(),
            'birthday'=>$this->faker->date(),
            'phone'=>$this->faker->phoneNumber(),
            'address'=>$this->faker->address(),
            'group_id'=>$this->faker->numberBetween(1,10),
            'user_id'=>$this->faker->unique()->numberBetween(1,10),
        ];
    }
}

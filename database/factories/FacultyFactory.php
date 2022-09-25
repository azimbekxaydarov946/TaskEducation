<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faculty>
 */
class FacultyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faculties=['Matematika','Amaily matematika va intellektual texnologiyalar','Fizika','Biologiya','Kimyo','Xorijiy filologiya','Ekologiya','Iqtisodiyot','Ijtimoiy fanlar','Tarix'];
        return [
          'name'=>$faculties[$this->faker->numberBetween(0, 9)]
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Speciality>
 */
class SpecialityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $specialities = ['Matematik analiz', 'Axborot xavfsizligi', 'Yadro fizikasi', 'Organik kimyo', 'Ingliz tilshunosligi', 'Jahon tarixi','Psixologiya','Iqtisodiyot nazariyasi','Ekologiya','Jahon tarixi'];
        return [
            'name' => $specialities[$this->faker->numberBetween(0, 9)],
            'faculty_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}

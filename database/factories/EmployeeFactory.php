<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\EmployeeDesignation;
use App\Models\Employee;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'employee_designation_id' =>  $this->faker->randomElement(EmployeeDesignation::pluck('id')),

            'name' => fake()->name(),
            'date_of_birth' => fake()->date(),
            'phone_number' => fake()->numerify('###########'),
            'job_title' => fake()->randomElement(['head doorman', 'supervisor', 'team member']),
            'utr_number' => fake()->numerify('#############'),
            'national_insurance_number' => fake()->numerify('#############'),
            'remarks' => fake()->sentence(10),
            'is_active' => rand(0,1)
        ];
    }
}

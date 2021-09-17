<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employment_date' => $this->faker->date('Y_m_d'),
            'employee_number' => $this->faker->numerify('id-####'),
            'lastname' => $this->faker->lastName(),
            'firstname' => $this->faker->firstName(),
            'middlename' => $this->faker->lastname(),
            'suffix' => $this->faker->suffix(),
            'address' => $this->faker->address(),
            'contact_number' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'emergency_contact_person' => $this->faker->name(),
            'ecp_contact_number' => $this->faker->phoneNumber(),
            'ecp_email' => $this->faker->email(),
        ];
    }
}

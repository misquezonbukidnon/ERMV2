<?php

namespace Database\Factories;

use App\Models\Classification;
use App\Models\Employee;
use App\Models\EmployeeRelationship;
use App\Models\EmploymentStatus;
use App\Models\Office;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeRelationshipFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmployeeRelationship::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employees_id' => Employee::select('id')->orderByRaw("RAND()")->first()->id,
            'offices_id' => Office::select('id')->orderByRaw("RAND()")->first()->id,
            'positions_id' => Position::select('id')->orderByRaw("RAND()")->first()->id,
            'classifications_id' => Classification::select('id')->orderByRaw("RAND()")->first()->id,
            'employment_statuses_id' => EmploymentStatus::select('id')->orderByRaw("RAND()")->first()->id,
        ];
    }
}

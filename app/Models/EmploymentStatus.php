<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeeRelationship;

class EmploymentStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date_started',
        'date_ended',
        'remarks'
    ];

    public function employeerelationships()
    {
        return $this->hasMany(EmployeeRelationship::class);
    }
}

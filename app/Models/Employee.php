<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeeRelationship;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_number',
        'lastname',
        'firstname',
        'middlename',
        'suffix',
        'address',
        'contact_number',
        'email',
        'emergency_contact_person',
        'ecp_contact_number',
        'ecp_email'
    ];

    public function employeerelationships()
    {
        return $this->hasMany(EmployeeRelationship::class);
    }
}

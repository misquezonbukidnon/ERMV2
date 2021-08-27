<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeeRelationship;

class Classification extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function employeerelationships()
    {
        return $this->hasMany(EmployeeRelationship::class);
    }
}

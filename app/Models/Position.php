<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserRelationship;
use App\Models\EmployeeRelationship;

class Position extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function userrelationships()
    {
        return $this->hasMany(UserRelationship::class);
    }

    public function employeerelationships()
    {
        return $this->hasMany(EmployeeRelationship::class);
    }
}

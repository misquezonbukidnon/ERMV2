<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserRelationship;

class Roles extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function userrelationships()
    {
        return $this->hasMany(UserRelationship::class);
    }
}

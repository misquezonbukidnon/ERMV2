<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserRelationship;

class UserImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'file_path',
    ];

    public function userrelationships()
    {
        return $this->hasMany(UserRelationship::class);
    }
}

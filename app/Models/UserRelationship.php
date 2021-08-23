<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Roles;
use App\Models\Office;
use App\Models\Position;
use App\Models\UserImage;

class UserRelationship extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'roles_id',
        'offices_id',
        'positions_id',
        'user_images_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function roles()
    {
        return $this->belongsTo(Roles::class, 'roles_id');
    }

    public function offices()
    {
        return $this->belongsTo(Office::class, 'offices_id');
    }

    public function positions()
    {
        return $this->belongsTo(Position::class, 'positions_id');
    }

    public function userimages()
    {
        return $this->belongsTo(UserImage::class, 'user_images_id');
    }
}

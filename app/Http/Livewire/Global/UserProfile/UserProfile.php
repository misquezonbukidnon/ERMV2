<?php

namespace App\Http\Livewire\Global\UserProfile;

use App\Models\UserRelationship;
use Livewire\Component;

class UserProfile extends Component
{
    public function render()
    {
        $user_id = auth()->user()->id;
        $users = UserRelationship::where('users_id', $user_id)->with('users', 'offices', 'roles', 'positions', 'userimages')->first();
        return view('livewire.global.user-profile.user-profile', compact('users'));
    }
}

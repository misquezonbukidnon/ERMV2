<?php

namespace App\Http\Livewire;

use App\Models\UserRelationship;

use Livewire\Component;

class Userprofile extends Component
{
    public function render()
    {
        $user_id = auth()->user()->id;
        $users = UserRelationship::where('users_id', $user_id)->with('users', 'offices', 'roles', 'positions', 'userimages')->first();
        return view('livewire.component.userprofile', compact('users'));
    }
}

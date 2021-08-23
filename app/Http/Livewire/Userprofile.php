<?php

namespace App\Http\Livewire;

use App\Models\UserRelationship;

use Livewire\Component;

class Userprofile extends Component
{
    public function render()
    {
        $users = UserRelationship::findOrFail(auth()->user()->id)->with('users', 'offices', 'roles', 'positions', 'userimages')->first();
        return view('livewire.component.userprofile', compact('users'));
    }
}

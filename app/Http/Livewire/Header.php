<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\UserRelationship;
use Illuminate\Support\Facades\Auth;

class Header extends Component
{
    public function render()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $users = UserRelationship::where('users_id', $user_id)->with('users', 'offices', 'roles', 'positions', 'userimages')->first();
            return view('livewire.navigation.header', compact('users'));
        } else {
            return view('livewire.navigation.header');
        }
    }
}

<?php

namespace App\Http\Livewire\Global\Navigation;

use Livewire\Component;
use App\Models\UserRelationship;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public function render()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $users = UserRelationship::where('users_id', $user_id)->with('users', 'offices', 'roles', 'positions', 'userimages')->first();
            return view('livewire.global.navigation.index', compact('users'));
        } else {
            return view('livewire.global.navigation.index');
        }
    }
}

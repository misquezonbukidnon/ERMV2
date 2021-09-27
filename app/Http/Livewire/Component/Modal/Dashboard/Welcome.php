<?php

namespace App\Http\Livewire\Component\Modal\Dashboard;

use Livewire\Component;
use App\Models\UserRelationship;
use Illuminate\Support\Facades\Auth;

class Welcome extends Component
{
    public function render()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $users = UserRelationship::where('users_id', $user_id)->with('users', 'userimages')->first();
            return view('livewire.component.modal.dashboard.welcome', compact('users'));
        } else {
            return view('livewire.component.modal.dashboard.welcome');
        }
    }
}

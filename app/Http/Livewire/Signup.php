<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Signup extends Component
{
    public $officelist;
    public $rolelist;
    public $positionlist;

    public function mount($offices, $roles, $positions)
    {
        $this->officelist = $offices;
        $this->rolelist = $roles;
        $this->positionlist = $positions;
    }

    public function render()
    {
        return view('livewire.authentication.signup');
    }
}

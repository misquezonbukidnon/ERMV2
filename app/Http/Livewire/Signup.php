<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Signup extends Component
{
    public $officelist;

    public function mount($offices)
    {
        $this->officelist = $offices;
    }

    public function render()
    {
        return view('livewire.authentication.signup');
    }
}

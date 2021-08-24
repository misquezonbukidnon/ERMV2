<?php

namespace App\Http\Livewire\Component\Office;

use Livewire\Component;
use App\Models\Office as ModelsOffice;

class Addofficeform extends Component
{
    //Public input field
    public $office;
    public $abbreviation;

    // validation rules
    protected $rules = [
        'abbreviation' => 'required|max:10',
        'office' => 'required|min:5',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        // validation
        $data = $this->validate();
        // store
        $office_name = ModelsOffice::create([
            'name' => $this->office,
            'abbr' => $this->abbreviation,
        ]);
        // reset form after submission
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->office='';
        $this->abbreviation='';
    }
    
    public function render()
    {
        return view('livewire.component.office.addofficeform');
    }
}
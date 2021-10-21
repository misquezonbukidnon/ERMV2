<?php

namespace App\Http\Livewire\Page\Modal\ModalOffice;

use Livewire\Component;
use App\Models\Office;

class OfficeEditoffice extends Component
{
    public $abbreviation;
    public $name;
    public $office_id;

    protected $listeners = [
        'officeModalEdit'
    ];

    // validation rules
    protected $rules = [
        'abbreviation' => 'required|max:10',
        'name' => 'required|min:5',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function officeModalEdit($officeId)
    {
        $details = Office::where('id', $officeId)->first();
        $this->abbreviation = $details->abbr;
        $this->name = $details->name;
        $this->office_id = $details->id;
    }

    public function submitForm($office_id)
    {
        // validation
        $data = $this->validate();
        $office = Office::find($office_id);

        $input_abbreviation = $this->abbreviation;
        $input_name = $this->name;

        $office->name = $input_name;
        $office->abbr = $input_abbreviation;

        $office->save();

        sleep(1);
        session()->flash('success_message', "Successfully updated to database");
    }

    public function refreshTable()
    {
        $this->emit('refreshTable');
    }

    public function render()
    {
        return view('livewire.page.modal.modal-office.office-editoffice');
    }
}

<?php

namespace App\Http\Livewire\Component\Record\Addrecordcomponent;

use App\Models\Classification;
use App\Models\EmploymentStatus;
use Livewire\Component;
use App\Models\Office;
use App\Models\Position;
use Livewire\WithFileUploads;

class Addemployeeform extends Component
{
    use WithFileUploads;

    // Global Input
    public $employee_number;
    public $lastname;
    public $firstname;
    public $middlename;
    public $suffix;
    public $address;
    public $contact_number;
    public $email;
    public $emergency_contact_person;
    public $ecp_contact_number;
    public $ecp_email;
    public $offices_id;
    public $positions_id;
    public $classifications_id;
    public $employment_statuses_id;
    public $image;
    public $file_document;
    public $date;
    public $message;


    // validation rules
    protected $rules = [
        'date' => 'required|date',
        'employee_number' => 'required',
        'lastname' => 'required|min:5',
        'firstname' => 'required|min:5',
        'middlename' => 'required',
        'address' => 'required|min:5',
        'emergency_contact_person' => 'required',
        'ecp_contact_number' => 'required',
        'offices_id' => 'required',
        'positions_id' => 'required',
        'classifications_id' => 'required',
        'employment_statuses_id' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function employeeForm()
    {
        $this->message = "form has been triggered";
    }


    public function render()
    {
        $offices = Office::all();
        $positions = Position::all();
        $classifications = Classification::all();
        $employmentstatuses = EmploymentStatus::all();
        return view('livewire.component.record.addrecordcomponent.addemployeeform', compact('offices', 'positions', 'classifications', 'employmentstatuses'));
    }
}

<?php

namespace App\Http\Livewire\Component\Modal\Record;

use App\Models\Classification;
use App\Models\EmploymentStatus;
use Livewire\Component;
use App\Models\Office;
use App\Models\Position;
use Livewire\WithFileUploads;

class RecordEdit extends Component
{
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
    public $file_upload;
    public $date;

    // validation rules
    protected $rules = [
        'lastname' => 'required|min:5',
        'firstname' => 'required|min:5',
        'middlename' => 'required',
        'employee_number' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function render()
    {
        $offices = Office::all();
        $positions = Position::all();
        $classifications = Classification::all();
        $employmentstatuses = EmploymentStatus::all();
        return view('livewire.component.modal.record.record-edit', compact('offices', 'positions', 'classifications', 'employmentstatuses'));
    }
}

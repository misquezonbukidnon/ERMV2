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
    public $file_upload;
    public $date;


    public function render()
    {
        $offices = Office::all();
        $positions = Position::all();
        $classifications = Classification::all();
        $employmentstatuses = EmploymentStatus::all();
        return view('livewire.component.record.addrecordcomponent.addemployeeform', compact('offices', 'positions', 'classifications', 'employmentstatuses'));
    }
}

<?php

namespace App\Http\Livewire\Component\Modal\Record;

use App\Models\Classification;
use App\Models\Employee;
use App\Models\EmployeeRelationship;
use App\Models\EmploymentStatus;
use Livewire\Component;
use App\Models\Office;
use App\Models\Position;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class RecordEdit extends Component
{
    use WithFileUploads;
    // Global Input
    public $empId;
    public $employment_date;
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
    public $positions_name;
    public $classifications_id;
    public $employment_statuses_id;
    public $image = null;
    public $file_document = null;
    public $message;
    public $notification = false;

    protected $listeners = [
        'employeeModalEdit'
    ];

    // validation rules
    protected $rules = [
        'employment_date' => 'required',
        'employee_number' => 'required',
        'lastname' => 'required',
        'firstname' => 'required',
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

    public function employeeModalEdit($empId)
    {
        $query = EmployeeRelationship::with('employees', 'positions', 'classifications', 'employment_statuses')->where('id', $empId)->first();
        $this->empId=$query->id;
        $this->employment_date=$query->employees->employment_date;
        $this->employee_number=$query->employees->employee_number;
        $this->lastname=$query->employees->lastname;
        $this->firstname=$query->employees->firstname;
        $this->middlename=$query->employees->middlename;
        $this->suffix=$query->employees->suffix;
        $this->address=$query->employees->address;
        $this->contact_number=$query->employees->contact_number;
        $this->email=$query->employees->email;
        $this->emergency_contact_person=$query->employees->emergency_contact_person;
        $this->ecp_contact_number=$query->employees->ecp_contact_number;
        $this->ecp_email=$query->employees->ecp_email;
        $this->offices_id=$query->offices_id;
        $this->classifications_id=$query->classifications_id;
        $this->employment_statuses_id=$query->employment_statuses_id;
        $this->positions_id=$query->positions->id;
        $this->positions_name=$query->positions->name;
    }

    public function editEmployee()
    {
        $query = EmployeeRelationship::find($this->empId);
        $query_employee = Employee::find($query->employees_id);
        $query_employee->employment_date = $this->employment_date;
        $query_employee->employee_number = $this->employee_number;
        $query_employee->firstname = $this->firstname;
        $query_employee->middlename = $this->middlename;
        $query_employee->lastname = $this->lastname;
        $query_employee->suffix = $this->suffix;
        $query_employee->address = $this->address;
        $query_employee->contact_number = $this->contact_number;
        $query_employee->email = $this->email;
        $query_employee->emergency_contact_person = $this->emergency_contact_person;
        $query_employee->ecp_contact_number = $this->ecp_contact_number;
        $query_employee->ecp_email = $this->ecp_email;
        $query_employee->save();

        $query->offices_id = $this->offices_id;
        $query->positions_id = $this->positions_id;
        $query->classifications_id = $this->classifications_id;
        $query->employment_statuses_id = $this->employment_statuses_id;
        $query->save();

        if ($query->employee_images_id == null) {
            if ($this->image == null) {
                dd('image is empty');
            } else {
                dd('image is not empty');
            }
        } else {
            # code...
        }

        sleep(1);
    }

    public function addEmployeeTableRefresh()
    {
        $this->emit('addEmployeeTableRefresh');
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

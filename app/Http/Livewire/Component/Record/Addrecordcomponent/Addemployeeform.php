<?php

namespace App\Http\Livewire\Component\Record\Addrecordcomponent;

use App\Models\Classification;
use App\Models\Employee;
use App\Models\EmployeeImage;
use App\Models\EmployeeRelationship;
use App\Models\EmploymentStatus;
use Livewire\Component;
use App\Models\Office;
use App\Models\Position;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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

    public function employeeForm(Request $request)
    {
        // validation
        $data = $this->validate();

        // storing to first model

        $employee = Employee::create([
            'employee_number' => $this->employee_number,
            'lastname' => $this->lastname,
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'suffix' => $this->suffix,
            'address' => $this->address,
            'contact_number' => $this->contact_number,
            'email' => $this->email,
            'emergency_contact_person' => $this->emergency_contact_person,
            'ecp_contact_number' => $this->ecp_contact_number,
            'ecp_email' => $this->ecp_email,
        ]);

        if ($request->image_upload != null) {
            $image_upload = $request->image_upload->file('image');
            dd($image_upload);
            $imageName = $employee->lastname.'_'.$employee->firstname.'.'.$this->image->extension();

            $img = Image::make($this->$image_upload->path());
            $img->resize(800, 800, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('/images/employees/').$imageName);

            $user_image = EmployeeImage::create([
                'name' => $imageName,
            ]);

            $employeeRels = EmployeeRelationship::create([
                'employees_id' => $employee->id,
                'offices_id' => $this->offices_id,
                'positions_id' => $this->positions_id,
                'classifications_id' => $this->classifications_id,
                'employment_statuses_id' => $this->employment_statuses_id,
                'employee_images_id' => $user_image->id,
            ]);

            sleep(1);

            session()->flash('success_message', "Successfully added to database");
        } else {
            $employeeRels = EmployeeRelationship::create([
                'employees_id' => $employee->id,
                'offices_id' => $this->offices_id,
                'positions_id' => $this->positions_id,
                'classifications_id' => $this->classifications_id,
                'employment_statuses_id' => $this->employment_statuses_id,
                'employee_images_id' => null,
            ]);

            sleep(1);

            session()->flash('success_message', "Successfully added to database");
        }

        // document upload TBF
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

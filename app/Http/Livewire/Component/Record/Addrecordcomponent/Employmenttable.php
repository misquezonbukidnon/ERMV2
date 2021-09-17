<?php

namespace App\Http\Livewire\Component\Record\Addrecordcomponent;

use App\Models\EmployeeRelationship;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Office;
use App\Models\Position;
use App\Models\Classification;
use App\Models\EmploymentStatus;

class Employmenttable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $searchlastname = '';
    public $searchmiddlename= '';
    public $searchfirstname = '';
    public $search_offices;
    public $search_classifications;
    public $search_employmentstatuses;
    public $pagecount = 10;
    public $sortField;
    public $sortAsc = true;
    public $position = '';
    public $classification = '';
    public $employmentstatus = '';

    protected $listeners = [
        'addEmployeeTableRefresh',
    ];

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }
        $this->sortField = $field;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function resetpageRoute()
    {
        $this->resetPage();
    }

    public function addEmployeeTableRefresh()
    {
        session()->flash('table_updated', "Table has been updated!");
    }

    public function employeeModalEdit($empId)
    {
        $this->emit('employeeModalEdit', $empId);
    }


    public function render()
    {
        // $employees = EmployeeRelationship::all();

        return view('livewire.component.record.addrecordcomponent.employmenttable', [
            'employees' => EmployeeRelationship::with('offices')->with('employees')->with('classifications')->with('employment_statuses')
            ->whereHas('employees', function ($query) {
                $query->where('firstname', 'like', '%' . $this->searchfirstname . '%');
            })
            ->whereHas('employees', function ($query) {
                $query->where('middlename', 'like', '%' . $this->searchmiddlename . '%');
            })
            ->whereHas('employees', function ($query) {
                $query->where('lastname', 'like', '%' . $this->searchlastname . '%');
            })
            ->whereHas('offices', function ($sub_offices) {
                $sub_offices->where('name', 'like', '%' . $this->search_offices . '%');
            })
            ->whereHas('classifications', function ($sub_classifications) {
                $sub_classifications->where('name', 'like', '%' . $this->search_classifications . '%');
            })
            ->whereHas('employment_statuses', function ($sub_employmentstatuses) {
                $sub_employmentstatuses->where('name', 'like', '%' . $this->search_employmentstatuses . '%');
            })
            ->when($this->sortField, function ($query) {
                $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
            })->paginate($this->pagecount),
            'offices' => Office::all(),
            'positions'=> Position::all(),
            'classifications'=> Classification::all(),
            'employmentstatuses' => EmploymentStatus::all()
        ]);
    }
}

<?php

namespace App\Http\Livewire\Page\Record;

use App\Models\EmployeeRelationship;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Office;
use App\Models\Position;
use App\Models\Classification;
use App\Models\EmploymentStatus;


class RecordEmployeetable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $searchlastname = '';
    public $searchmiddlename = '';
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
    public $employees;
    public $offices;
    public $positions;
    public $classifications;
    public $employmentstatuses;

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

    public function showEmployee($empId)
    {
        $this->emit('showEmployee', $empId);
    }

    public function render()
    {
        $query = EmployeeRelationship::with('employees', 'offices', 'positions', 'classifications', 'employment_statuses')->get();
        $this->employees = $query;
        $this->offices = $query;
        $this->positions = $query;
        $this->classifications = $query;
        $this->employmentstatuses = $query;
        return view('livewire.page.record.record-employeetable');
    }
}

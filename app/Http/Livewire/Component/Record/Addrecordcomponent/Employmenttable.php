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
    public $pagecount = 2;
    public $sortField;
    public $sortAsc = true;
    public $position = '';
    public $classification = '';
    public $employmentstatus = '';

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

    public function render()
    {
        // $employees = EmployeeRelationship::all();

        return view('livewire.component.record.addrecordcomponent.employmenttable', [
            'employees' => EmployeeRelationship::whereHas('employees', function ($query) {
                $query->where('firstname', 'like', '%' . $this->search . '%')
                    ->orWhere('lastname', 'like', '%' . $this->search . '%');
            })
            ->when($this->sortField,function ($query) {
                $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
            })->paginate($this->pagecount),
            'offices' => Office::all(),
            'positions'=> Position::all(),
            'classifications'=> Classification::all(),
           'employmentstatuses' => EmploymentStatus::all()
        ]);
    }
}

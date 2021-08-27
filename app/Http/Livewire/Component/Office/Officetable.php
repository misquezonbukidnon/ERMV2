<?php

namespace App\Http\Livewire\Component\Office;

use App\Models\Office;
use Livewire\Component;
use Livewire\WithPagination;

class Officetable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search ='';
    public $pagecount = 10;
    public $officetotalcount = '';
    public $sortField;
    public $sortAsc = true;

    protected $listeners = [
        'addTableRefresh',
        'refreshTable',
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

    public function addTableRefresh()
    {
        session()->flash('table_updated', "Table has been updated!");
    }

    public function refreshTable()
    {
        //
    }


    public function officeModalEdit($itemID)
    {
        $this->emit('officeModalEdit', $itemID);
    }
    public function render()
    {
        return view('livewire.component.office.officetable', [
            'offices' => Office::where(function ($query) {
                $query->where('abbr', 'like', '%'.$this->search.'%')
                ->orWhere('name', 'like', '%'.$this->search.'%');
            })
            ->when($this->sortField, function ($query) {
                $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
            })
            ->Paginate($this->pagecount),
            'OfficesCount' => Office::all(),
        ]);
    }
}

<?php

namespace App\Http\Livewire\Component\Office;

use App\Models\Office;
use Livewire\Component;
use Livewire\WithPagination;

class Officetable extends Component
{
    use WithPagination;

    protected $listeners = [
        'addTableRefresh',
        'refreshTable'
    ];

    public function addTableRefresh()
    {
        session()->flash('table_updated', "Table has been updated!");
    }

    public function refreshTable()
    {
        session()->flash('table_updated', "Table has been updated!");
    }


    public function officeModalEdit($itemID)
    {
        $this->emit('officeModalEdit', $itemID);
    }
    protected $paginationTheme = 'bootstrap';
    public $search ='';
    public function render()
    {
        return view('livewire.component.office.officetable', [
            'offices' => Office::where('abbr', 'like', '%'.$this->search.'%')->Paginate(10),
        ]);
    }
}

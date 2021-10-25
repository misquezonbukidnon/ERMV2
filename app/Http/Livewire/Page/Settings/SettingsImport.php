<?php

namespace App\Http\Livewire\Page\Settings;

use Livewire\Component;
use Livewire\WithFileUploads;

class SettingsImport extends Component
{
    use WithFileUploads;

    public $file;
    public function uploadFile()
    {
        dd($this->file);
    }
    public function render()
    {
        return view('livewire.page.settings.settings-import');
    }
}

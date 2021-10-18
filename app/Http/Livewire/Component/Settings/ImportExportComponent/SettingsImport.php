<?php

namespace App\Http\Livewire\Component\Settings\ImportExportComponent;

use Livewire\Component;
use Livewire\WithFileUploads;

class SettingsImport extends Component
{
    use WithFileUploads;

    public $xlsFile;
    public function uploadFile()
    {
        dd($this->xlsFile);

        // $this->validate([
        //     'xlsFile' => 'mimes:xlsx', // 1MB Max
        // ]);

        // $this->xlsFile->store('files');


        // Sleep for 1 second before flash message
        sleep(1);
        session()->flash('success_message', "Upload success!");
    }
    public function render()
    {
        return view('livewire.component.settings.import-export-component.settings-import');
    }
}

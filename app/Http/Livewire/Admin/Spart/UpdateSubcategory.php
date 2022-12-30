<?php

namespace App\Http\Livewire\Admin\Spart;

use App\Models\subcategory;
use Livewire\Component;

class UpdateSubcategory extends Component
{
    public $subcategory;
    protected $listeners = [
        'refresh'=>'$refresh',
    ];
    public $name;
    protected $rules = [
        'name' => 'required|unique:subcategory',
    ];
    public function mount($subCategoryID)
    {
        $this->subcategory = subcategory::find($subCategoryID);
    }

    public function updateSubCategory()
    {
        $this->validate();
        $this->subcategory->update($this->validate());
        $this->emit('refresh');
    }
    public function render()
    {
        return view('livewire.admin.spart.update-subcategory');
    }
}

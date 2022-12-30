<?php

namespace App\Http\Livewire\Admin\Spart;

use App\Models\Category;
use Livewire\Component;

class UpdateCategory extends Component
{

    protected $listeners =[
        'refresh'=>'$refresh',
    ];
    public $category;
    public function mount($categoryID)
    {
        $this->category = Category::find($categoryID);
        
    }

    protected $rules = [
        'name' => 'required|unique:category',
    ];
    public $name;
    public function updateCategory()
    {
        $this->validate();
        $this->category->update($this->validate());
        $this->emit('refresh');
    }
    public function render()
    {
        return view('livewire.admin.spart.update-category');
    }
}

<?php

namespace App\Http\Livewire\Admin\Spart;

use App\Models\Category;
use Livewire\Component;

class CategoryCreate extends Component
{   
    protected $rules = [
        'name' => 'required',
    ];

    public $name;
    public function categoryCreate()
    {
        $this->validate();
        Category::create($this->validate());

    }
    
    public function render()
    {
        return view('livewire.admin.spart.category-create');
    }
}

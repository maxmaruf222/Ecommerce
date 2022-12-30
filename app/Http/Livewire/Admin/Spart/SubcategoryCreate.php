<?php

namespace App\Http\Livewire\Admin\Spart;

use App\Models\Category;
use App\Models\subcategory;
use Livewire\Component;

class SubcategoryCreate extends Component
{   
    public $categories;
    public function mount()
    {
        $this->categories = Category::get();
    }

    protected $rules = [
        'category_id' => 'required',
        'name' => 'required',
    ];
    protected $messages = [
        'category_id.required' => 'The category name should be selected.',
    ];

    public $category_id;
    public $name;
    public function subcategoryCreate()
    {
        $this->validate();
        subcategory::create($this->validate());
    }

    public function render()
    {
        return view('livewire.admin.spart.subcategory-create');
    }
}

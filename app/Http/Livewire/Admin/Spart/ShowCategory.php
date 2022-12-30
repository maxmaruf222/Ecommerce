<?php

namespace App\Http\Livewire\Admin\Spart;

use Livewire\Component;
use App\Models\Category;
use App\Models\subcategory;

class ShowCategory extends Component
{
    public $enableInput = false;
    public $enableSubInput = false;
    public $category = [];


    protected $listeners = [
        'deleteCategory',
        'refresh'=> '$refresh',
        'showEdit',
        'showSubEdit',
        'deleteSubcategory'
    ];

    public function mount()
    {   
        $this->category = Category::with('subcategory')->get();
    }

    

    public function deleteCategory($categoryID)
    {
        Category::destroy($categoryID);
        $this->emit('refresh');
    }

    public function deleteSubcategory($subCategoryID)
    {
        subcategory::destroy($subCategoryID);
        $this->emit('refresh');
    }

    public function showEdit($categoryID)
    {
        $this->enableInput =$categoryID;
    }
    public function showSubEdit($subcategoryID)
    {
        $this->enableSubInput =$subcategoryID;
    }
    public function render()
    {
        return view('livewire.admin.spart.show-category');
    }
}

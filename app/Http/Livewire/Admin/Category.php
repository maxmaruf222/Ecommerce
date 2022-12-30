<?php

namespace App\Http\Livewire\Admin;
use Livewire\Component;
class Category extends Component
{   
    
    public $category_show;
    public $subcategory_show;
    public $category_list_show = 1;
    public function category_show()
    {
        $this->category_show = 1 ;
        $this->subcategory_show = 0 ;
        $this->category_list_show = 0 ;
    }
    public function subcategory_show()
    {
        $this->category_show = 0 ;
        $this->subcategory_show = 1 ;
        $this->category_list_show = 0 ;
    }
    public function category_list_show()
    {
        $this->category_show = 0 ;
        $this->subcategory_show = 0 ;
        $this->category_list_show = 1 ;
        
    }


    
    public function render()
    {
        return view('livewire.admin.category')->extends('admin.layouts.app')->section('Main');
    }

    
}

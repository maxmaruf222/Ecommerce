<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Products extends Component
{
    public function render()
    {
        return view('livewire.admin.products')->extends('admin.layouts.app')->section('Main');
    }
}

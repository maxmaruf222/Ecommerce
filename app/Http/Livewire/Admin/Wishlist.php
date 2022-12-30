<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Wishlist extends Component
{
    public function render()
    {
        return view('livewire.admin.wishlist')->extends('admin.layouts.app')->section('Main');
    }
}

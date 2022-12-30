<?php

namespace App\Http\Livewire\Public;

use Livewire\Component;

class ProductDetails extends Component
{
    public function render()
    {
        return view('livewire.public.product-details')->extends('public.layouts.app')->section('Main');
    }
}

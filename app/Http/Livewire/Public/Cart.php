<?php

namespace App\Http\Livewire\Public;

use Livewire\Component;

class Cart extends Component
{
    public function render()
    {
        return view('livewire.public.cart')->extends('public.layouts.app')->section('Main');
    }
}

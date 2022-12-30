<?php

namespace App\Http\Livewire\Public;

use Livewire\Component;

class Checkout extends Component
{
    public function render()
    {
        return view('livewire.public.checkout')->extends('public.layouts.app')->section('Main');
    }
}

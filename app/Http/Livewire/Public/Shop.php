<?php

namespace App\Http\Livewire\Public;

use Livewire\Component;

class Shop extends Component
{
    public function render()
    {
        return view('livewire.public.shop')->extends('public.layouts.app')->section('Main');
    }
}

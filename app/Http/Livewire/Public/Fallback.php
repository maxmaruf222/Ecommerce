<?php

namespace App\Http\Livewire\Public;

use Livewire\Component;

class Fallback extends Component
{
    public function render()
    {
        return view('livewire.public.fallback')->extends('public.layouts.app')->section('Main');
    }
}

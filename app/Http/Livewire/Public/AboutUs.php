<?php

namespace App\Http\Livewire\Public;

use Livewire\Component;

class AboutUs extends Component
{
    public function render()
    {
        return view('livewire.public.about-us')->extends('public.layouts.app')->section('Main');
    }
}

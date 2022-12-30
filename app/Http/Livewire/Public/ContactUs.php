<?php

namespace App\Http\Livewire\Public;

use Livewire\Component;

class ContactUs extends Component
{
    public function render()
    {
        return view('livewire.public.contact-us')->extends('public.layouts.app')->section('Main');
    }
}

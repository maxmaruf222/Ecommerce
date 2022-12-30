<?php

namespace App\Http\Livewire\Public;

use Livewire\Component;

class MyAccount extends Component
{
    public function render()
    {
        return view('livewire.public.my-account')->extends('public.layouts.app')->section('Main');
    }
}

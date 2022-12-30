<?php

namespace App\Http\Livewire\Public;

use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        return view('livewire.public.blog')->extends('public.layouts.app')->section('Main');
    }
}

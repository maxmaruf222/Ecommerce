<?php

namespace App\Http\Livewire\Public;

use Livewire\Component;

class SingleBlog extends Component
{
    public function render()
    {
        return view('livewire.public.single-blog')->extends('public.layouts.app')->section('Main');
    }
}

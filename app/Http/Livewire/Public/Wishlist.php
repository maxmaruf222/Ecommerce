<?php

namespace App\Http\Livewire\Public;

use Livewire\Component;

class Wishlist extends Component
{
    public function render()
    {
        return view('livewire.public.wishlist')->extends('public.layouts.app')->section('Main');
    }
}

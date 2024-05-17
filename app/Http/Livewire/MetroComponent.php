<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MetroComponent extends Component
{
    public function render()
    {
        return view('livewire.metro-component')->layout('layouts.base');
    }
}

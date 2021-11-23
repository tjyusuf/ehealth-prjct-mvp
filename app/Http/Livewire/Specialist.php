<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Specialist extends Component
{
    public function render()
    {
        return view('livewire.specialist')
                ->extends('layouts.app');
    }
}

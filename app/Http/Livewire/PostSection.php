<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostSection extends Component
{
    public $questions;
    public function render()
    {
        return view('livewire.post-section',$this->questions);
    }
}

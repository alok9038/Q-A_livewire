<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostContent extends Component
{
    public $question;
    public function render()
    {
        return view('livewire.post-content',$this->question);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Question;
use Livewire\Component;

class Home extends Component
{

    public $questions;
    public function mount(){
        $this->questions = Question::orderBy('id','desc')->get();
    }
    public function render()
    {
        // $data['questions'] = Question::orderBy('id','desc')->get();
        return view('livewire.home',$this->questions);
    }
}

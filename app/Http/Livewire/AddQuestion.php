<?php

namespace App\Http\Livewire;

use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class AddQuestion extends Component
{
    public $question;

    protected $rules = [
        'question'=>'required',
    ];

    public $questions;
    public function mount(){
        $this->questions = Question::orderBy('id','desc')->get();
    }

    public function updated($property){
        $this->validateOnly($property);
    }

    public function addQuestion(){
        $data = $this->validate();;

        $question = new Question();
        $question->title = $this->question;
        $question->user_id = Auth::id();
        $question->save();

        $this->mount();

        toast('Question Successfully Added!','success');
        // return redirect()->route('homepage');
        // $this->question = "";
    }

    public function render()
    {
        return view('livewire.add-question',$this->questions);
    }
}

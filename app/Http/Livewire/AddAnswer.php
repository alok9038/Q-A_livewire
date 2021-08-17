<?php

namespace App\Http\Livewire;

use App\Models\Answer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddAnswer extends Component
{
    public $answer;
    public $question;
    public $question_id;

    public function mount($question)
    {
        $this->question_id = $question['id'];
    }


    protected $rules = [
        'answer'=>'required',
    ];

    public function updated($property){
        $this->validateOnly($property);
    }

    public function addAnswer(){
        $data = $this->validate();;

        $question = new Answer();
        $question->content = $this->answer;
        $question->user_id = Auth::id();
        $question->question_id = $this->question_id;
        $question->save();

        toast('Answer Successfully Added!','success');
        return redirect()->route('homepage');
        // $this->question = "";
    }

    public function render()
    {
        return view('livewire.add-answer');
    }
}

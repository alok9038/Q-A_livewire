<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;

use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PostSection extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $try;

    protected $rules = [
        'try'=>'required',
    ];

    public function updated($property){
        $this->validateOnly($property);
    }

    public function mount(){
        $this->questions = Question::orderBy('id','desc')->paginate(10);
    }

    public function add(){
        $data = $this->validate();
        if($data == true){
            $question = new Question();
            $question->title = $this->try;
            $question->user_id = Auth::id();
            $question->save();
        }

        $this->mount();

        $this->try = "";
    }



    public function render()
    {
        $data['questions'] = $this->questions = Question::orderBy('id','desc')->paginate(10);
        return view('livewire.post-section',$data);
    }
}

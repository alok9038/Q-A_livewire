<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function unanswered($question_id){
        $data['question'] = Question::where('id',$question_id)->first();
        return view('question_view',$data);
    }
}

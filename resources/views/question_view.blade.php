@extends('layouts.base')
@section('page_title','Homepage')
@section('content')
    <div class="container-fluid py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="fw-bold">{{ $question->title }}?</h3>
                    <div class=" mx-auto my-2 mt-3 border-top py-4">
                        @if ($question->answers->count() > 0)
                            <p class="small text-muted fw-bold">{{ $question->answers->count()  }} answer</p>

                            @foreach ($question->answers as $answer)
                            <div class="card border-0 mb-3">
                                <div class="card-header bg-transparent d-flex">
                                    <img src="{{ asset('images/user.png') }}" style="height: 35px;" alt="" class="img-fluid rounded-circle">
                                    <div>
                                        <p class="mt-2 ms-2 small">{{ $answer->user->name }}</p>
                                    </div>
                                    <div class="ms-auto mt-2 me-3 dropstart">
                                        <a href="#dropdownMenuButton1"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" class="">
                                            <i class="fa fa-ellipsis-v text-muted"></i>
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item small" href="#">delete answer</a></li>
                                            <li><a class="dropdown-item small" href="#">edit answer</a></li>
                                          </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('unanswered',['question_id'=>$question->id]) }}" class="text-decoration-none"><p class="text-muted  h5">{{ $answer->content }}</p></a>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <h6 class="text-center">
                                <i class="fa fa-pen text-center mx-auto"></i> <br>
                                <p class="small ms-3 mt-2">no answers yet</p>
                            </h6>
                        @endif


                    </div>
                    @if ($question->user_id !== Auth::id())
                    <div class="card border col-lg-10">
                        <div class="card-header d-flex">
                            <img src="{{ asset('images/user.png') }}" style="height: 30px;" alt="" class="img-fluid rounded-circle">
                            <div>
                                <p class="mt-1 ms-2 fw-bold">{{ auth()->user()->name }}</p>
                            </div>
                        </div>
                        <div class="card-body p-0 ">
                            <form action="">
                                <textarea name="answer" placeholder="  write your answer here.." id=""  class="form-control border-0 rounded-0" cols="20" rows="6"></textarea>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary px-4" style="border-radius: 25px">Post</button>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <div class="card-header border-0 bg-transparent">
                            Related Questions
                            <hr>
                        </div>
                        <div class="card body border-0">
                            <div class="list-group list">
                                <a href="" class="list-group-item border-0 text-primary">What are some simple but good projects on networking?</a>
                                <a href="" class="list-group-item border-0 text-primary">What are some good and simple networking projects that a third year undergraduate can do in the summer as a mini project?</a>
                                <a href="" class="list-group-item border-0 text-primary">What are some networking projects?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

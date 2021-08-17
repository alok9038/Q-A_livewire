<div>
    <div class="card border-0 shadow-sm mb-3">
        <div class="card-header bg-transparent d-flex">
            <img src="{{ asset('images/user.png') }}" style="height: 40px;" alt="" class="img-fluid rounded-circle">
            <div>
                <p class="mt-2 ms-2 small">{{ $question->user->name }}</p>
            </div>
            <div class="ms-auto mt-2 me-3 dropstart">
                <a href="#dropdownMenuButton1"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" class="">
                    <i class="fa fa-ellipsis-v text-muted"></i>
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item small" href="#">delete post</a></li>
                    <li><a class="dropdown-item small" href="#">edit post</a></li>
                  </ul>
            </div>
        </div>
        <div class="card-body">
            <a href="{{ route('unanswered',['question_id'=>$question->id]) }}" class="text-decoration-none"><p class="text-muted  h5">{{ $question->title }}</p></a>
        </div>
        <div class="card-footer bg-transparent border-0 pb-3">
            @if ($question->answers->count() > 0)
                <p class="small text-muted fw-bold">{{ $question->answers->count()  }} answer</p>
            @else
                <p class="small text-muted fw-bold">No answer yet</p>
            @endif
            <a href="#addAnswer{{ $question->id }}" data-bs-toggle="modal" data-bs-target="#addAnswer{{ $question->id }}" class="text-decoration-none"><span><i class="fa fa-edit"></i> Answer</span></a>
        </div>
    </div>
</div>

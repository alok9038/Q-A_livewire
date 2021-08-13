<div>
    <div class="card border-0 shadow-sm mb-3">
        <div class="card-header bg-transparent d-flex">
            <img src="{{ asset('images/user.png') }}" style="height: 40px;" alt="" class="img-fluid rounded-circle">
            <div>
                <p class="mt-2 ms-2 fw-bold">{{ $question->user->name }}</p>
            </div>
        </div>
        <div class="card-body">
            <p class="text-muted">{{ $question->title }}</p>
        </div>
        <div class="card-footer bg-transparent border-0 pb-3">
            <p class="small text-muted fw-bold">No answer yet</p>
            <a href="#addAnswer" data-bs-toggle="modal" data-bs-target="#addAnswer" class="text-decoration-none"><span><i class="fa fa-edit"></i> Answer</span></a>
        </div>
    </div>
</div>

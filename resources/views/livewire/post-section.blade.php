<div>
    <div class="card border-0 mb-3 shadow-sm">
        <div class="card-header bg-transparent d-flex border-0 pb-0">
            <img src="{{ asset('images/user.png') }}" style="height: 30px;" alt="" class="img-fluid rounded-circle">
            <div>
                <p class="mt-1 ms-2 fw-bold">User Brow</p>
            </div>
        </div>
        <div class="card-body pt-1">
            <h4 class="text-muted">Whats your questions?</h4>
            <a href="#addQuestions" data-bs-toggle="modal" data-bs-target="#addQuestion"  class="stretched-link"></a>
        </div>
    </div>

    @foreach ($questions as $question)
        @livewire('post-content',['question'=>$question])
    @endforeach
</div>

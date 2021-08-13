<div>
    <div class="card border-0 mb-3 shadow-sm">
        <div class="card-header bg-transparent d-flex border-0 pb-0">
            <img src="{{ asset('images/user.png') }}" style="height: 30px;" alt="" class="img-fluid rounded-circle">
            <div>
                <p class="mt-1 ms-2 fw-bold">{{ auth()->user()->name }}</p>
            </div>
        </div>
        <div class="card-body pt-1">
            {{-- <h4 class="text-muted">Whats your questions?</h4>
            <a href="#addQuestions" data-bs-toggle="modal" data-bs-target="#addQuestion"  class="stretched-link"></a> --}}
            <form action="" method="POST" wire:submit.prevent="add">
                @csrf
                <textarea name="try" wire:model="try" class="form-control shadow-none  @error('try') is-invalid @enderror" cols="30" rows="3" placeholder="  whats your questions?"></textarea>
                @error('try')
                    <p class="small text-danger">{{ $message }}</p>
                @enderror
                <button class="btn btn-info py-1 px-4 mt-2 d-flex ms-auto" type="submit"  style="border-radius: 25px;">add </button>
            </form>
        </div>
    </div>

    {{-- <form action="" method="POST" wire:submit.prevent="addQuestion">
        <div class="card-body">
          <div class="alert alert-primary mb-3">
              <h6>Tips on getting good answers quickly</h6>
              <ul>
                  <li>Make sure your question has not been asked already</li>
                  <li>Keep your question short and to the point</li>
                  <li>Double-check grammar and spelling</li>
              </ul>
          </div>
        <textarea name="question" wire:model="question" cols="30" rows="10" class="form-control shadow-none @error('question') is-invalid @enderror"></textarea>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form> --}}

    @foreach ($questions as $question)
        @livewire('post-content',['question'=>$question],key(time().$question->id))
    @endforeach

    <div class="p-3 bg-white shadow-sm rounded">
        {{ $questions->links() }}
    </div>
</div>

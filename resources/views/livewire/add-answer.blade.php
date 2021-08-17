<div>
  <!-- Modal -->
  <div class="modal fade" wire:ignore.self id="addAnswer{{ $this->question['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <form action="" method="POST" wire:submit.prevent="addAnswer">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Write your answer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <textarea name="answer" wire:model="answer" placeholder="  hii! write your answer here.." id="" class="form-control rounded-0  @error('answer') is-invalid @enderror" cols="30" rows="10"></textarea>
                {{-- <input type="text" name="question_id" wire:model="question_id"  value="{{ $question }}"> --}}
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

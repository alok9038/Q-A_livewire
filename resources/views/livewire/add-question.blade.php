<div>
  <div class="modal fade" wire:ignore.self id="addQuestion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Questions</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="POST" wire:submit.prevent="addQuestion">
        <div class="modal-body">
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
        </form>
      </div>
    </div>
  </div>
</div>

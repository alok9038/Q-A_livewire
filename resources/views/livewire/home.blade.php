<div>
    <div class="container my-5">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-3">
            <div class="col-lg-3 ">
                @livewire('users')
            </div>
            <div class="col-lg-6">
                @livewire('post-section')
            </div>
            <div class="col-lg-3">
                @livewire('ads')
            </div>
        </div>
    </div>
    @livewire('add-question')
    @livewire('add-answer')
</div>

<div class="modal fade show" id="new_link_modal" tabindex="-1" aria-labelledby="new_link_modalLabel" @if ( $show_new_link ) style="display:block;" aria-modal="true" role="dialog" @endif >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="new_link_modalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent='submit_form'>
                    @csrf
                    {{ $errors }} {{$name}}
                    <div class="mb-3">
                        {{$name}}
                        <label for="name" class="form-label">Name</label>
                        <input id="name" wire:model='name' name='name' type="text" class="form-control">
                        <div class="form-text">Private name to describe the ilnk.</div>
                    </div>
                    <div class="mb-3">
                    <label for="source" class="form-label">Source Link</label>
                    <input id="source" wire:model='source' name='source' type="text" class="form-control" id="source">
                    <div class="form-text">What link do you want to direct to.</div>
                    </div>
                    <button type='submit' class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade show" id="new_link_modal" tabindex="-1" aria-labelledby="new_link_modalLabel" @if ( $show_modal ) style="display:block;" aria-modal="true" role="dialog" @endif >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="new_link_modalLabel">Edit Link</h5>
            <button type="button" class="btn-close" aria-label="Close" wire:click="toggle_modal"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent='submit_form'>
                    @csrf
                    @if ( count($errors) )
                        {{$errors}}
                    @endif
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input id="name" wire:model='link.name' name='name' type="text" class="form-control">
                        <div class="form-text">Private name to describe the link.</div>
                    </div>
                    <div class="mb-3">
                        <label for="alternative" class="form-label">Unique link url</label>
                        <input id="alternative" wire:model='link.alternative' name='alternative' type="text" class="form-control">
                        <div class="form-text">What would you like your unique url to be?</div>
                    </div>
                    <button type='submit' class="btn btn-primary">Submit</button><button type='submit' class="btn btn-danger" wire:click="delete_link">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade show" id="new_link_modal" tabindex="-1" aria-labelledby="new_link_modalLabel" @if ( $show_new_link ) style="display:block;" aria-modal="true" role="dialog" @endif >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="new_link_modalLabel">Modal title</h5>
            <button type="button" class="btn-close" aria-label="Close" wire:click="hide_new_link_modal"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent='submit_form'>
                    @csrf
                    @if ( count($errors) )
                        {{$errors}}
                    @endif
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
                    <div class="mb-3">
                        <label for="alternative" class="form-label">Unique link url</label>
                        <input id="alternative" wire:model='alternative' name='alternative' type="text" class="form-control">
                        <div class="form-text">What would you like your unique url to be?</div>
                    </div>
                    <button type='submit' class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row border rounded overflow-hidden mb-4 shadow-sm">
        <div class="col p-4 d-flex flex-column">
            @if($updated)
                <div class="alert alert-success" role="alert">
                   Biography updated!
                </div>
            @endif
            <form wire:submit.prevent='submit_form'>
                @csrf
                @if ( count($errors) )
                    {{$errors}}
                @endif
                <div class="mb-3">
                    <label for="biography" class="form-label">Biography</label>
                    <textarea id="biography" wire:model='biography' name='biography' type="text" class="form-control"></textarea>
                </div>
                <button class="btn btn-primary">Update</button>
            </form>
        </div>
      </div>
</div>

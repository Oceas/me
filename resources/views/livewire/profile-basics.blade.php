<div class="row border rounded overflow-hidden mb-4 shadow-sm">
        <div class="p-4">
            @if($updated)
                <div class="alert alert-success" role="alert">
                   Profile updated!
                </div>
            @endif
            <form wire:submit.prevent='submit_form' type='multipart/form-data'>
                @csrf
                @if ( count($errors) )
                    {{$errors}}
                @endif
                <div class="row">
                    <div>
                        @if ( count($errors) )
                            {{$errors}}
                        @endif
                    </div>
                    <div class="col-4 form-group">
                        <div>
                                <img src="{{url(\Auth::user()->get_profile_picture()) }}" style="width:200px; height:200px;" class="rounded-circle"/>

                        </div>
                        <a class="mt-5" data-bs-toggle="collapse" data-bs-target="#profile_picture_upload" aria-expanded="false" aria-controls="profile_picture_upload">
                            Change Picture
                        </a>
                        <div class="collapse" id="profile_picture_upload">
                            <input id="profile_picture" wire:model='profile_picture' name='profile_picture' type="file" class="mt-3 form-control"/>
                        </div>
                    </div>
                    <div class="col-8 form-group">
                        <div class="form-group mb-3">
                            <label for="biography" class="form-label">Biography</label>
                            <textarea id="biography" wire:model='biography' name='biography' type="text" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-primary">Update</button>
                    </div>
                </div>
                <div class="mb-3">

                </div>
            </form>
        </div>
      </div>
</div>

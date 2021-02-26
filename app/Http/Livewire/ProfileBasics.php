<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileBasics extends Component
{
    public $biography = '';
    public $updated = false;
    public $profile_picture;

    use WithFileUploads;

    protected $rules = [
        'biography'       => 'string|nullable',
        'profile_picture' => 'image|max:5120'
    ];

    public function mount()
    {
        $this->biography = \Auth::user()->get_biography();
    }

    public function render()
    {
        return view('livewire.profile-basics');
    }

    public function submit_form()
    {
        $this->validate();
        \Auth::user()->set_biography($this->biography);
        \Auth::user()->set_profile_picture($this->profile_picture->store('public/profile_picture'));
        $this->updated = true;
    }
}

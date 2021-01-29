<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProfileBasics extends Component
{
    public $biography = '';
    public $updated = false;

    protected $rules = [
        'biography'  => 'string|nullable',
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
        $this->updated = true;
    }
}

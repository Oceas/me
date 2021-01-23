<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\link as Link;
use \Illuminate\Validation\Rule as Rule;

class EditLinkModal extends Component
{
    public $show_modal = false;

    public $link;

    protected $listeners = ['edit_link'];

    protected $rules = [
        'link.name'  => 'required|string',
        'link.alternative' => ['required', 'string'],
    ];

    public function toggle_modal()
    {
        $this->show_modal = !$this->show_modal;
    }

    public function edit_link(Link $link)
    {
        $this->link = $link;
        $this->toggle_modal();
    }

    public function render()
    {
        return view('livewire.edit-link-modal');
    }

    public function submit_form()
    {
        $this->validate();
        $this->link->save();
        $this->toggle_modal();
        $this->emit('load_links');
    }

    public function delete_link()
    {
        Link::destroy('id', $this->link->id);
        $this->link = [];
        $this->toggle_modal();
        $this->emit('load_links');
    }
}

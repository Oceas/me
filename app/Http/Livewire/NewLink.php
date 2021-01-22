<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class NewLink extends Component
{

    public $name = '';

    public $source = '';

    public $alternative = '';

    public $show_new_link = false;

    protected $listeners = ['show_new_link_modal' => 'show_new_link_modal'];

    protected $rules = [
        'name' => 'required',
        'source' => 'required',
        'alternative' => 'required|unique:links',
    ];

    public function show_new_link_modal()
    {
        $this->show_new_link = true;
    }

    public function hide_new_link_modal()
    {
        $this->show_new_link = false;
    }

    public function render()
    {
        return view('livewire.new-link');
    }

    public function submit_form()
    {
        $link_details = $this->validate($this->rules);
        $link = new \App\Models\link([
            'user_id' => \Auth::user()->id,
            'name' => $link_details['name'],
            'source' => $link_details['source'],
            'alternative' =>  $link_details['alternative'],
            'count' => 0,
        ]);
        $link->save();
        $this->hide_new_link_modal();
        $this->clear_form();
        $this->emit('load_links');
    }

    public function clear_form()
    {
        $this->name = '';
        $this->source = '';
        $this->alternative = '';
    }
}

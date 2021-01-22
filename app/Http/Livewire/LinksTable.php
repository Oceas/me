<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LinksTable extends Component
{

    public $links;

    protected $listeners = ['load_links'];

    public function render()
    {
        $this->load_links();
        return view('livewire.links-table');
    }

    public function load_links()
    {
        $this->links = \Auth::user()->links()->get();
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LinksTable extends Component
{

    public $links;

    public function render()
    {
        $this->links = \Auth::user()->links()->get();
        return view('livewire.links-table');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class NewLink extends Component
{

    public $name = '';

    public $source = '';

    public $show_new_link = false;

    protected $listeners = ['show_new_link_modal' => 'show_new_link_modal'];

    protected $rules = [
        'name' => 'required',
        'source' => 'required',
    ];

    public function show_new_link_modal()
    {
        $this->show_new_link = true;
    }

    public function render()
    {
        return view('livewire.new-link');
    }

    public function submit_form()
    {
        $link_details = $this->validate($this->rules);
        \Log::info(print_r((object) array(
            'line' => __LINE__,
            'file' => __FILE__,
            'dump' => array(
                $link_details['name'],
            ),
        ), true));
        $link = new \App\Models\link([
            'user_id' => \Auth::user()->id,
            'name' => $link_details['name'],
            'source' => $link_details['source'],
            'alternative' => 'memebigboy',
            'count' => 0,
        ]);
        $link->save();
        $this->show_new_link = false;
        $this->emit('load_links');
    }
}

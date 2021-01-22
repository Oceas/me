<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewLink extends Component
{

    public $name = 'test';

    public $source = 'source source';

    public $show_new_link = false;

    protected $listeners = ['show_new_link_modal' => 'show_new_link_modal'];

    protected $rules = [
        'name' => 'required',
        'source' => 'required',
    ];

    public function show_new_link_modal()
    {
        \Log::info(print_r((object) array(
            'line' => __LINE__,
            'file' => __FILE__,
            'dump' => array(
                'I did get called',
            ),
        ), true));

        $this->show_new_link = true;
    }

    public function render()
    {
        return view('livewire.new-link');
    }

    public function submit_form()
    {
        \Log::info(print_r((object) array(
            'line' => __LINE__,
            'file' => __FILE__,
            'dump' => array(
                'testing',
                'here',
                $this->name,
            ),
        ), true));
        $link_details = $this->validate($this->rules);
        \Log::info(print_r((object) array(
            'line' => __LINE__,
            'file' => __FILE__,
            'dump' => array(
                'also here',
            ),
        ), true));
        $this->show_new_link = false;
    }
}

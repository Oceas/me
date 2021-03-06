<?php

namespace App\Http\Livewire;

use App\Models\Quote as ModelsQuote;
use Livewire\Component;

class Quote extends Component
{

    public $quote;

    public function render()
    {
        $this->quote = ModelsQuote::inRandomOrder()->first();

        if (null === $this->quote) {
            return '<p></p>';
        }
        return view('livewire.quote');
    }
}

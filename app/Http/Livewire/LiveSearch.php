<?php

namespace App\Http\Livewire;

use App\Service\PhoneBook;
use Livewire\Component;

class LiveSearch extends Component
{
	public $name;

    public function render()
    {
        return view('livewire.live-search',[
        	'contacts' => PhoneBook::searchByName('Deo')
        ]);
    }
}

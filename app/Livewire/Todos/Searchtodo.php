<?php

namespace App\Livewire\Todos;

use Livewire\Component;
use Livewire\Attributes\Url;

class Searchtodo extends Component
{   #[Url(as:'query',history:false,keep:false)]
    public $search;
     public function render()
    {
        return view('livewire.todos.searchtodo');
    }
    public function searchbtn(){
        
        $this->dispatch('searchtext',$this->search);
    }
}

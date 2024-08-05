<?php

namespace App\Livewire\Todos;

use Livewire\Component;

class Searchtodo extends Component
{    public $search;
     public function render()
    {
        return view('livewire.todos.searchtodo');
    }
    public function searchbtn(){
        
        $this->dispatch('searchtext',$this->search);
    }
}

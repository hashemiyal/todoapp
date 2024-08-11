<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Todo;
class Modal extends Component
 
{   public $deleteabletodo;
    #[On('settodo')]
    public function settodo($todo){
    $this->deleteabletodo=$todo;
    }
    public function render()
    {
        return view('livewire.modal',['todo'=>$this->deleteabletodo]);
    }

    public function deletetodo(){
     $deletetodo= Todo::find($this->deleteabletodo['id']);
     $deletetodo->delete();
     return redirect('/');
    }
}

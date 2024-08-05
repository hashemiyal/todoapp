<?php

namespace App\Livewire\Todos;

use Livewire\Component;
use App\Models\Todo;
use Livewire\Attributes\Rule;

class Createtodo extends Component
{   
    #[Rule('required|min:3|max:20')]
    public  $name;
   
    public function create(){
    $validated= $this->validateOnly('name');
     Todo::create($validated);
     $this->reset();
     session()->flash('success','Todo Created!');
    
    }
    public function render()
    {
        return view('livewire.todos.createtodo');
    }
}

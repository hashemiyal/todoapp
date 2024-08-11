<?php

namespace App\Livewire\Todos;

use Livewire\Component;
use App\Models\Todo;
use Livewire\Attributes\On;

class Listtodo extends Component
{  
    public $editename;
    public $editeid;
    public $search;
    public function placeholder(){
      return view('placeholder');
    }
    #[On('searchtext')]
    public function updatetext($search){
    $this->search=$search;
    }
    public function render()
       
    {
        $todos=Todo::where('name','like',"%{$this->search}%")->get();
        return view('livewire.todos.listtodo',compact('todos'));
        
    }
    public function delete($id){
     Todo::find($id)->delete();
    }
    public function toggle($id){
      $todo=Todo::find($id);
      $todo->completed=!$todo->completed;
      $todo->save();
    } 
    public function settodoid($id){
      $this->editeid=$id;
      $this->editename=Todo::find($id)->name;
    }
    public function editetodo(){
      $todo=Todo::find($this->editeid);
      $todo->name=$this->editename;
      $todo->save();
      $this->reset('editename','editeid');

    }
    public function canceltodo(){
      $this->reset('editeid','editename');
    }
    public function settodo($todo){
      $this->dispatch('settodo',$todo);
    }
 
}

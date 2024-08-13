<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Userslist extends Component
{   public $perpage;
    public $search;
    public $selecteduser;
    public $sortby='created_at';
    public $sortDir='ASC';
    public function sortBy($sort){
    if($this->sortby===$sort){
    $this->sortDir=($this->sortDir==='ASC')?'DESC':'ASC';
    }
    $this->sortby=$sort;
    }
    public $role="";
    public function render()
    {   $users=User::when($this->role!='',function($q){
      $q->where('is_admin',$this->role);
    })->search($this->search)->orderBy($this->sortby,$this->sortDir)->paginate($this->perpage);
        return view('livewire.userslist',compact('users'));
    }


    public function delete(User $user){
     $user->delete();
    }

}

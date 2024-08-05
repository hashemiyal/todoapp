<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class Register extends Component

{   use WithFileUploads;
    #[Rule('required|min:5|max:20')]
    public $name;
    #[Rule('required|email|max:255|unique:users')]
    public $email;
    #[Rule('required|min:5')]
    public $password;
    #[Rule('nullable|image|max:1024')]
    public $image;
    public function render()
    {
        return view('livewire.register');
    }
    public function register(){
     $this->validate();
      $user=User::create([
        'name'=>$this->name,
        'email'=>$this->email,
        'password'=>Hash::make($this->password)

      ]);
      if($this->image){
        $this->image->store('uploads','public');
      }
      $this->dispatch('user-created',$user);
    
    }
}

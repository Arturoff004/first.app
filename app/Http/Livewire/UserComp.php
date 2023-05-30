<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserComp extends Component
{
    public $user;
    public $user_text;

    public function mount(){
        $this->user = User::all();
    }
    public function render()
    {
        $this->user = User::where('name', 'like', '%'.$this->user_text.'%')->get();
        return view('livewire.user-comp');
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostComp extends Component
{

    public $post;
    public $post_text;

    public function mount(){
        $this->post = Post::all();
    }

    public function render()
    {
        $this->post = Post::where('title', 'like', '%'.$this->post_text.'%')->get();
        return view('livewire.post-comp');
    }
}

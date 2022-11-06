<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class SinglePost extends Component
{
    public $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }
}

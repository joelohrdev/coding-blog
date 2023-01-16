<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Snippets extends Component
{
    public function render()
    {
        return view('livewire.snippets', [
            'posts' => Post::where('category', 'snippet')->get(),
        ]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class ShowCategoryPosts extends Component
{
    public $category;
    public $posts;

    public function mount(Category $category)
    {
        $this->posts = $category->posts()->get();
        $this->category = $category;
    }

}

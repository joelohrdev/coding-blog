<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class PostCategories extends Component
{
    public $category;

    public function mount(Category $category)
    {
        $this->category = $category;
    }
}

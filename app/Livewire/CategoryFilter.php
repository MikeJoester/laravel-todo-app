<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoryFilter extends Component
{
    public $search = '';

    public function render()
    {
        $categories = Category::where('category_name', 'like', '%' . $this->search . '%')->get();

        return view('livewire.category-filter', ['categories' => $categories]);
    }
}

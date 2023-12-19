<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoryList extends Component
{
    public $categories;
    public $category_name = '';
    public $category_description = '';

    function mount()
    {
        $this->fetchCategories();
    }

    function fetchCategories()
    {
        $this->categories = Category::all();
    }

    function addCategory()
    {
        if($this->category_name != '')
        {
            $cat = new Category();
            $cat->category_name = $this->category_name;
            $cat->category_description = $this->category_description;
            $cat->save();
            $this->reset();
            $this->fetchCategories();
        }
    }

    public function render()
    {
        return view('livewire.category-list');
    }
}

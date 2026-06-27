<?php

namespace App\Features\Category\Services;

use App\Features\Category\Models\Category;

class CategoryService
{
    public function getAllCategories()
    {
        return Category::all();
    }


}

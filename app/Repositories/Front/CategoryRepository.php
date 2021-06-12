<?php

namespace App\Repositories\Front;

use App\Models\Category;

class CategoryRepository
{

    public $categories;

    public function __construct(
        Category $category
    ) {
        $this->categories = $category;
    }

    public function get_all_categories()
    {
        return $this->categories->all();
    }

    public function get_one_category($query)
    {
        return $this->categories->where($query)->first();
    }

    public function get_best_categories(array $category_list)
    {
        return $this->categories->whereIn("id", $category_list)->get();
    }

}

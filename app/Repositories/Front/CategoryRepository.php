<?php

namespace App\Repositories\Front;

use App\Models\Category;
use App\Models\SubCategory;

class CategoryRepository
{

    public $categories;
    public $subCategories;

    public function __construct(
        Category $category,
        SubCategory $subCategory
    ) {
        $this->categories = $category;
        $this->subCategories = $subCategory;
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

    public function get_all_sub_categories()
    {
        return $this->subCategories->all();
    }

    public function get_all_sub_categories_by_category($category)
    {   
        return $this->subCategories->with('category')->whereHas('category', function ($query) use($category) {
            $query->where('slug', $category);
        })->get();
    }

}

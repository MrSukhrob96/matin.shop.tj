<?php

namespace App\Services\Front;

use App\Repositories\Front\CategoryRepository;
use App\Repositories\Front\ProductRepository;

class CategoryService
{
    public $categories;


    public function __construct(
        CategoryRepository $categoryRepository
    ) {
        $this->categories = $categoryRepository;
    }

    public function all_categories()
    {
        return $this->categories->get_all_categories();
    }

    public function best_categories()
    {
        return $this->categories->get_best_categories([1, 2]);
    }

    public function all_subcategories()
    {
        return $this->categories->get_all_sub_categories();
    }

    public function subcategories($category)
    {
        return $this->categories->get_all_sub_categories_by_category($category);
    }

}

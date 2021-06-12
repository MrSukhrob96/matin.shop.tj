<?php

namespace App\Services\Front;

use App\Repositories\Front\CategoryRepository;


class CategoryService
{
    public $categories;


    public function __construct(
        CategoryRepository $categories
    ) {
        $this->categories = $categories;
    }

    public function all_categories()
    {
        return $this->categories->get_all_categories();
    }

    public function best_categories()
    {
        return $this->categories->get_best_categories([1, 2]);
    }

    public function sub_categories_by_category()
    {
        
    }

}

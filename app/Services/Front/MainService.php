<?php

namespace App\Services\Front;

use App\Repositories\Front\CategoryRepository;
use App\Repositories\Front\ProductRepository;


class MainService
{

    public $categories;
    public $products;

    public function __construct(
        CategoryRepository $category,
        ProductRepository $product
    ) {
        $this->categories = $category;
        $this->products = $product;
    }

    public function get_best_products()
    {
        return $this->products->get_best_products(10);
    }

    public function get_new_products()
    {
        return $this->products->get_new_products(10);
    }

}

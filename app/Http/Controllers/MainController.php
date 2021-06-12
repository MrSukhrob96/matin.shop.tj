<?php

namespace App\Http\Controllers;

use App\Services\Front\CategoryService;
use App\Services\Front\ProductService;

class MainController extends Controller
{
    public $categories;
    public $products;

    public function __construct(
        CategoryService $categories,
        ProductService $products
    )
    {
        $this->products = $products;
        $this->categories = $categories;
    }
    
    public function index()
    {
        return view("index", array(
            "categories" => $this->categories->all_categories(),
            "category" => $this->categories->best_categories(),
            "best_products" => $this->products->best_products(),
            "new_products" => $this->products->new_products()
        ));
    }

}

<?php

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Services\Front\CategoryService;
use App\Services\Front\ProductService;
use App\Services\Front\BrandService;

class ProductCategoryController extends Controller
{
    public $products;
    public $categories;
    public $brands;

    public function __construct(
        CategoryService $categoryService,
        ProductService $productService,
        BrandService $brandService
    )
    {
        $this->products = $productService;
        $this->categories = $categoryService;
        $this->brands = $brandService;
    }

    public function index()
    {
        return view('front.categories.index', [
            "categories" => $this->categories->all_categories(),
            "subcategories" => $this->categories->all_subcategories(),
            'products' => $this->products->all_products(),
            "brands" => $this->brands->sub_category_brands("all")
        ]);
    }
}

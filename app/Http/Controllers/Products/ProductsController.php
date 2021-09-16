<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Services\Front\BrandService;
use Illuminate\Http\Request;

use App\Services\Front\ProductService;
use App\Services\Front\CategoryService;

class ProductsController extends Controller
{
    public $products;
    public $categories;
    public $brands;

    public function __construct(
        ProductService $products,
        CategoryService $categories,
        BrandService $brandService
    ) {
        $this->products = $products;
        $this->categories = $categories;
        $this->brands = $brandService;
    }

    public function index($category)
    {
        return view('front.products.index', [
            "categories" => $this->categories->all_categories(),
            "subcategories" => $this->categories->all_subcategories(),
            "products" => $this->products->products_by_category($category),
            "brands" => $this->brands->sub_category_brands("all")
        ]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($sub_category)
    {
        return view('front.categories.index', [
            "categories" => $this->categories->all_categories(),
            'products' => $this->products->sub_category_products($sub_category)
        ]);
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}

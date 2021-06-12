<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Services\Front\CategoryService;
use Illuminate\Http\Request;

use App\Services\Front\ProductService;

class ProductController extends Controller
{
    public $products;

    public function __construct(
        ProductService $product,
        CategoryService $categories
    ) {
        $this->products = $product;
        $this->categories = $categories;
    }

    public function index()
    {
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($category, $product)
    {
        return view('front.product.index', array(
            "categories" => $this->categories->all_categories(),
            "product" => $this->products->one_product_by_category($category, $product),
            "products" => $this->products->some_products_by_category($category)
        ));
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

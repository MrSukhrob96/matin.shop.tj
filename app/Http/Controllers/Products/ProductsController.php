<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Front\ProductService;
use App\Services\Front\CategoryService;

class ProductsController extends Controller
{
    public $products;

    public function __construct(
        ProductService $products,
        CategoryService $categories
    ) {
        $this->products = $products;
        $this->categories = $categories;
    }

    public function index()
    {
        return view('front.products.index', [
            "categories" => $this->categories->all_categories(),
            'products' => $this->products->all_products()
        ]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
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

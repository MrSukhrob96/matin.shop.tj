<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Services\Front\CategoryService;
use App\Services\Front\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SearchController extends Controller
{

    public $categories;
    public $products;

    public function __construct(
        CategoryService $categories,
        ProductService $products
    ) {
        $this->products = $products;
        $this->categories = $categories;
    }

    public function index()
    {
        return view('front.search.index', array(
            "categories" => $this->categories->all_categories(),
            "products" => null,
        ));
    }

    public function show(Request $request)
    {
        if (!$request->has('searching_post') || $request->input('searching_post') == '') {
            return redirect()->route('search.index');
        }

        $products = DB::table('product_sub_category')
            ->join('sub_categories', 'product_sub_category.sub_category_id', 'sub_categories.id')
            ->join('products', 'product_sub_category.product_id', 'products.id')
            ->where('sub_categories.sub_category_name', 'like', '%' . $request->input('searching_post') . '%')
            ->orWhere('products.product_name', 'like', '%' . $request->input('searching_post') . '%')
            ->select('sub_categories.sub_category_name', 'sub_categories.slug as category_slug', 'products.product_name', 'products.slug as product_slug', 'products.product_price', 'products.product_name', 'products.product_img')
            ->get();

        return view('front.search.index', array(
            "categories" => $this->categories->all_categories(),
            "products" => $products,
        ));
    }
}

<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\Front\CategoryService;
use App\Services\Front\ProductService;

class SearchController extends Controller
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
        return view('front.search.index', array(
            "categories" => $this->categories->all_categories(),
            "products" => $this->products->best_products(),
        ));
    }

    public function show()
    {
    }
}

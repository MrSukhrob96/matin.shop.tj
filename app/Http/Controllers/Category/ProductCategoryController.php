<?php

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\SubCategory;
use App\Models\Product;
use App\Services\Front\CategoryService;
use App\Services\Front\ProductService;
use App\Services\Front\BrandService;
use Illuminate\Support\Arr;

class ProductCategoryController extends Controller
{
    public $products;
    public $categories;
    public $brands;

    public function __construct(
        CategoryService $categoryService,
        ProductService $productService,
        BrandService $brandService
    ) {
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

    public function filter(Request $request)
    {
        $keysCategories = [];
        $keysBrands = [];
        $products = [];
        $price_end = $request->input("price_end");
        $price_start = $request->input("price_start");

        if ($request->has("categories")) {
            [$keysCategories] = Arr::divide($request->input("categories"));
        }

        if ($request->has("brands")) {
            [$keysBrands] = Arr::divide($request->input("brands"));
        }

        if ($request->has("brands") && $request->has("categories")) {
            $products = Product::whereBetween('product_price', [$price_start, $price_end])->WhereIn("brand_id", $keysBrands)
                ->whereHas("category", function ($query) use ($keysCategories) {
                    $query->WhereIn("sub_category_id", $keysCategories);
                })->paginate(6);
        }

        if ($request->has("brands") && !$request->has("categories")) {
            $products = Product::whereBetween('product_price', [$price_start, $price_end])->WhereIn("brand_id", $keysBrands)->paginate(6);
        }

        if (!$request->has("brands") && $request->has("categories")) {
            $products = Product::whereBetween('product_price', [$price_start, $price_end])
                ->whereHas("category", function ($query) use ($keysCategories) {
                    $query->WhereIn("sub_category_id", $keysCategories);
                })->paginate(6);
        }

        return view('front.filter.index', [
            "categories" => $this->categories->all_categories(),
            "subcategories" => $this->categories->all_subcategories(),
            'products' => $products,
            "brands" => Brand::all()
        ]);
    }
}

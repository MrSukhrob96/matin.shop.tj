<?php

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\SubCategory;
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
        $subcategories = null;

        if ($request->has("categories")) {
            [$keysCategories] = Arr::divide($request->input("categories"));
        }

        if ($request->has("brands")) {
            [$keysBrands] = Arr::divide($request->input("categories"));
        }

        if (count($keysCategories) > 0 && count($keysBrands) > 0) {
            $subcategories = SubCategory::whereIn("id", $keysCategories)->whereHas("brands", function ($query) use ($keysBrands) {
                $query->WhereIn("brand_id", $keysBrands);
            })->get();
        }

        if (count($keysCategories) > 0 && count($keysBrands) <= 0) {
            $subcategories = SubCategory::whereIn("id", $keysCategories)->get();
        }

        if (count($keysCategories) < 0 && count($keysBrands) > 0) {
            $subcategories = SubCategory::whereHas("brand", function($query) use($keysBrands){
                $query->whereIn("brand_id", $keysBrands);
            })->get();
        }


        return view('front.filter.index', [
            "categories" => $this->categories->all_categories(),
            "subcategories" => $this->categories->all_subcategories(),
            'subCategories' => $subcategories,
            "brands" => Brand::all()
        ]);
    }
}

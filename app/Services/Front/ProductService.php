<?php
namespace App\Services\Front;

use App\Repositories\Front\ProductRepository;

use App\Models\Category;

class ProductService
{
    public $categories;
    public $products;

    public const LIKE_PRODUCT_LIMIT = 12;
    public const BEST_PRODUCTS_LIMIT = 12;
    public const PRODUCTS_LIMIT = 12;
    public const NEW_PRODUCTS_LIMIT = 9;

    public function __construct(
        ProductRepository $product
    ) {
        $this->products = $product;
    }

    public function all_products()
    {
        return $this->products->get_all_products(self::PRODUCTS_LIMIT);
    }

    public function best_products()
    {
        return $this->products->get_best_products(self::BEST_PRODUCTS_LIMIT);
    }

    public function new_products()
    {
        return $this->products->get_new_products(self::NEW_PRODUCTS_LIMIT);
    }

    public function one_product_by_category($category, $product)
    {
        return $this->products->get_one_product_by_category($category, $product);
    }

    public function some_products_by_category($category)
    {
        return $this->products->get_some_products_by_category($category, self::LIKE_PRODUCT_LIMIT);
    }

    public function products_by_category($category)
    {
        $categories = Category::where('slug', $category)->first();
        $products = array();

        foreach($categories->sub_category as $category){
           array_push($products, $this->products->get_products_by_category($category->slug));
        }
        return $products ?? [];
    }

    public function sub_category_products($category)
    {
        return $this->products->get_products_by_category($category);
    }


}

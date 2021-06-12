<?php
namespace App\Services\Front;

use App\Repositories\Front\ProductRepository;

class ProductService
{
    public $categories;
    public $products;

    public const LIKE_PRODUCT_LIMIT = 12;

    public function __construct(
        ProductRepository $product
    ) {
        $this->products = $product;
    }

    public function all_products()
    {
        return $this->products->get_all_products(12);
    }

    public function best_products()
    {
        return $this->products->get_best_products(10);
    }

    public function new_products()
    {
        return $this->products->get_new_products(10);
    }

    public function one_product_by_category($category, $product)
    {
        return $this->products->get_one_product_by_category($category, $product);
    }

    public function some_products_by_category($category)
    {
        return $this->products->get_some_products_by_category($category, self::LIKE_PRODUCT_LIMIT);
    }

}

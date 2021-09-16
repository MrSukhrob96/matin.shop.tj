<?php

namespace App\Repositories\Front;

use App\Models\Product;

class ProductRepository
{

    public $products;

    public function __construct(Product $products)
    {
        $this->products = $products;
    }

    public function get_all_products($limit)
    {
        return $this->products->paginate($limit);
    }

    public function get_one_product($product)
    {
        return $this->products->find($product);
    }

    public function get_best_products($limit)
    {
        return $this->products->orderBy('product_rating', 'desc')->take($limit)->get();
    }

    public function get_new_products($limit)
    {
        return $this->products->orderBy('created_at', 'desc')->take($limit)->get();
    }

    public function get_one_product_by_slug($id)
    {
        return $this->products->where("slug", '=', $id)->first();
    }

    public function get_one_product_by_category($category, $product)
    {
        return $this->products->where("slug", $product)->whereHas('category', function ($query) use ($category) {
            $query->where('slug', $category);
        })->first();
    }

    public function get_some_products_by_category($category, $limit)
    {
        return $this->products->whereHas('category', function ($query) use ($category) {
            $query->where('slug', $category);
        })->get();
    }

    public function get_products_by_category($category)
    {
        return $this->products->whereHas('category', function ($query) use ($category) {
            $query->where('slug', $category);
        })->paginate(12);
    }

}

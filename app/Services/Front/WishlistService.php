<?php

namespace App\Services\Front;

use App\Repositories\Front\ProductRepository;
use App\Repositories\Front\WishlistRepository;

class WishlistService
{

    public $wishlists;
    public $products;

    public function __construct(
        WishlistRepository $wishlistRepository,
        ProductRepository $productRepository
    ) {
        $this->wishlists = $wishlistRepository;
        $this->products = $productRepository;
    }

    public function user_wishlists()
    {
        return $this->wishlists->get_user_wishlists();
    }

    public function add_wishlist($request)
    {
        $product = $this->products->get_one_product_by_slug($request->product);
        $wishlist = $this->wishlists->add_product_to_wishlist();
        $wishlist->products()->attach($product->id);

        session()->put('wishlist_count', $this->wishlists->get_wishlists_count());
        return redirect()->back();
    }

    public function remove_wishlist($id)
    {
        $wishlist = $this->wishlists->get_wishlist_by_id($id);
        session()->forget('wishlist_count', $this->wishlists->get_wishlists_count());
        $this->wishlists->remove_product_from_wishlist($id);
        return $wishlist->products()->detach();
    }
}

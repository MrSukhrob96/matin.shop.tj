<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Front\CategoryService;
use App\Services\Front\WishlistService;


class WishlistController extends Controller
{
    public $categories;
    public $wishlists;

    public function __construct(
        CategoryService $categoryService,
        WishlistService $wishlistService
    ) {
        $this->categories = $categoryService;
        $this->wishlists = $wishlistService;
    }

    public function index()
    {
        return view('front.wishlist.index', array(
            "categories" => $this->categories->all_categories(),
            "wishlists" =>  $this->wishlists->user_wishlists()
        ));
    }

    public function store(Request $request)
    {
        $this->wishlists->add_wishlist($request);
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $this->wishlists->remove_wishlist($request->input("wishlist_id"));
        return  redirect()->back();
    }


    public function wishlist_add(Request $request)
    {
        $this->wishlists->add_wishlist($request);
        return redirect()->back();
    }
}

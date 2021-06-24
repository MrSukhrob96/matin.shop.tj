<?php

namespace App\Repositories\Front;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistRepository
{

    public $wishlist;

    public function __construct(
        Wishlist $wishlist
    ) {
        $this->wishlist = $wishlist;
    }

    public function get_user_wishlists()
    {
        return $this->wishlist->where('user_id', '=', auth()->user()->id)->get();
    }

    public function get_wishlist_by_id($id)
    {
        return $this->wishlist->where("id", $id)->first();
    }

    public function remove_product_from_wishlist($id)
    {
        return $this->wishlist->destroy($id);
    }

    public function add_product_to_wishlist()
    {
        return auth()->user()->wishlists()->create();
    }

    public function get_wishlists_count()
    {
        return $this->wishlist->whereNull('deleted_at')->count();
    }
}

<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Front\CategoryService;

class CartController extends Controller
{
    public $categories;
    
    public function __construct(
        CategoryService $categoryService
    )
    {
        $this->categories = $categoryService;
    }

    public function index()
    {
        return view('front.cart.index', array(
            "categories" => $this->categories->all_categories()
        ));
    }

}

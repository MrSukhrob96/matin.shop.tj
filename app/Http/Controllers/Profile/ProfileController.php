<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Front\CategoryService;
use App\Services\Front\OrderService;

class ProfileController extends Controller
{

    public $categories;
    public $orders;

    public function __construct(
        CategoryService $categoryService,
        OrderService $orderService
    ) {
        $this->categories = $categoryService;
        $this->orders = $orderService;
    }


    public function index()
    {
        return view('front.profile.index', array(
            "categories" => $this->categories->all_categories(),
            "orders" => $this->orders->user_order()
        ));
    }

    public function store(Request $request)
    {
        auth()->user()->update($request->only('name', 'surname', 'phone', 'email'));
        return redirect()->back();
    }

    public function destroy()
    {
    }
}

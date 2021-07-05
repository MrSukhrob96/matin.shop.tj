<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Front\CategoryService;
use App\Services\Front\OrderService;

class OrderController extends Controller
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
        return view('front.cart.index', array(
            "categories" => $this->categories->all_categories(),
            "orders" => $this->orders->user_orders()
        ));
    }

    public function store(Request $request)
    {
        $this->orders->add_order($request);
        return redirect()->back();
    }

    public function to_order(Request $request, $product)
    {
        $this->orders->to_order($request, $product);

        return redirect()->back();
    }


    public function update(Request $request)
    {
        $this->orders->update_status_order_products($request);
        return redirect()->back();
    }

    public function destroy($id)
    {
        $this->orders->remove_order($id);

        return redirect()->back();
    }
}

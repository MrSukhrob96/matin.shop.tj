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
    )
    {
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

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $this->orders->add_order($request);
        return redirect()->back();
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        $this->orders->remove_order($id);
        
        return redirect()->back();
    }
    
}

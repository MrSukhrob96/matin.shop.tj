<?php

namespace App\Services\Front;

use App\Repositories\Front\OrderRepository;
use App\Repositories\Front\ProductRepository;
use Illuminate\Http\Request;

class OrderService
{

    public $orders;
    public $products;
    public const PRODUCT_COUNT = 1;
    public const PRODUCT_STATUS_ADDED = 0;
    public const PRODUCT_STATUS_ORDERED = 1;
    public const PRODUCT_STATUS_ORDERED_INSTALLMENT_PLAN = 2;

    public function __construct(
        OrderRepository $orderRepository,
        ProductRepository $productRepository
    ) {
        $this->orders = $orderRepository;
        $this->products = $productRepository;
    }

    public function add_order($request)
    {
        $product = $this->products->get_one_product_by_slug($request->product);

        $order = $this->orders->add_to_order(array(
            'order_product_count' => self::PRODUCT_COUNT,
            'order_product_price' => $product->product_price,
            'order_total_product_price' => $product->product_price * self::PRODUCT_COUNT,
            'order_status' => self::PRODUCT_STATUS_ADDED
        ));

        session()->put('cart_count', $this->orders->get_order_count(self::PRODUCT_STATUS_ADDED));

        return $order->products()->attach($product->id);
    }

    public function remove_order($id)
    {
        if (!$id) {
            return redirect()->back();
        }

        $this->orders->remove_from_order($id);
        session()->put('cart_count', $this->orders->get_order_count(self::PRODUCT_STATUS_ADDED));
        return redirect()->back();
    }

    public function user_orders()
    {
        return $this->orders->get_user_orders();
    }
}

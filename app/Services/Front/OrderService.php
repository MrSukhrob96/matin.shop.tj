<?php

namespace App\Services\Front;

use App\Repositories\Front\OrderRepository;
use App\Repositories\Front\ProductRepository;
use Exception;
use Illuminate\Http\Request;

class OrderService
{

    public $orders;
    public $products;

    public const ORDERS_LIMIT = 6;
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

        if (!$product) return;

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
        if (!$id) return redirect()->back();

        try {
            $order = $this->orders->get_one_order_by_id($id);
            $this->orders->remove_from_order($id);
            $order->products()->detach();
            session()->put('cart_count', $this->orders->get_order_count(self::PRODUCT_STATUS_ADDED));
            return redirect()->back();
        } catch (Exception $ex) {
            return redirect()->back();
        }
    }

    public function user_orders()
    {
        return $this->orders->get_user_orders();
    }

    public function update_status_order_products($request)
    {
        $action = $this->check_action($request);

        if ($action != false) {
            $products = $this->orders->get_user_orders();

            foreach ($products as $product) {
                $product->order_status = $action;
                $product->save();
            }

            session()->put('cart_count', $this->orders->get_order_count(self::PRODUCT_STATUS_ADDED));
            return;
        }

        return;
    }

    private function check_action($request)
    {
        if ($request->has("buyInstallments")) {
            return 2;
        } elseif ($request->has("buyAvailability")) {
            return 1;
        }

        return false;
    }


    public function to_order($request, $product)
    {
        $action = $this->check_action($request);

        if ($action != false) {

            $product = $this->products->get_one_product_by_slug($product);

            if (!$product) return;

            $order = $this->orders->add_to_order(array(
                'order_product_count' => $this->get_product_count($request),
                'order_product_price' => $product->product_price,
                'order_total_product_price' => $product->product_price * $this->get_product_count($request),
                'order_status' => $action
            ));

            return $order->products()->attach($product->id);
        }

        return;
    }

    private function get_product_count($request)
    {
        return $request->order_product_count ?? self::PRODUCT_COUNT;
    }

    public function user_order()
    {
        return $this->orders->get_orderes([1, 2], self::ORDERS_LIMIT);
    }
}

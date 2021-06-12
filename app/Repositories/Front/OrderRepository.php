<?php

namespace App\Repositories\Front;

use App\Models\Order;

class OrderRepository {

    public $orders;

    public function __construct(Order $orders)
    {
        $this->orders = $orders;
    }

    public function add_to_cart()
    {
    
    }

}
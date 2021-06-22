<?php

namespace App\Repositories\Front;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderRepository {

    public $orders;

    public function __construct(Order $orders)
    {
        $this->orders = $orders;
    }

    public function add_to_order($data)
    {
       return auth()->user()->orders()->create($data);
    }

    public function get_user_orders()
    {
        return $this->orders->where('user_id', auth()->user()->id)->get();
    }

    public function remove_from_order($id)
    {
        return $this->orders->destroy($id);
    }
    
    public function get_order_count($status)
    {
        return auth()->user()->orders()->where("order_status", $status)->whereNull('deleted_at')->count();
    }

}
@extends('_layouts.front.app')

@section('content')

<div class="page-content mt-7">
    <div class="cart">
        <div class="container">
            @if(isset($orders) && $orders->count() > 0)
            <div class="row">
                <div class="col-lg-9">
                    <table class="table table-cart table-mobile">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($orders as $order)
                                @foreach($order->products as $product)
                                <tr>
                                    <td class="product-col">
                                        <div class="product">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="{{ asset('storage/uploads/products/' . $product->product_img) }}" alt="Product image">
                                                </a>
                                            </figure>

                                            <h3 class="product-title">
                                                <a href="#">{{ $product->product_name }}</a>
                                            </h3>

                                        </div>
                                    </td>
                                    <td class="price-col">{{ $product->product_price }} с</td>
                                    <td class="quantity-col">
                                        <div class="cart-product-quantity">
                                            <input type="number" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                        </div>
                                    </td>
                                    <td class="total-col">{{ $product->product_price }} с</td>
                                    <td class="remove-col">
                                        <form action="{{ route('profile.order_remove', ['order' => $order->id]) }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn-remove"><i class="icon-close"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <aside class="col-lg-3">
                    <div class="summary summary-cart">
                        <h3 class="summary-title">Cart Total</h3>

                        <table class="table table-summary">
                            <tbody>
                                <tr class="summary-subtotal">
                                    <td>Total:</td>
                                    <td>$160.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <button href="checkout.html" class="btn btn-outline-primary-2 btn-order btn-block mb-1">
                            Купить растрочку
                        </button>
                        <button href="checkout.html" class="btn btn-outline-primary-2 btn-order btn-block">
                            Купить наличными
                        </button>
                    </div>
                </aside>
            </div>
            @else
            <div class="row">
                <div class="col-12">
                    <h3>Empty cart list</h3>
                </div>
            </div>
            @endisset
        </div>
    </div>
</div>

@endsection
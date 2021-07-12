@extends('_layouts.front.app')

@section('content')
<div class="page-content pt-7">
    <div class="dashboard">
        <div class="container">
            <div class="row">
                <aside class="col-md-4 col-lg-3 border-right">
                    <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="tab-dashboard-link" data-toggle="tab" href="#tab-dashboard" role="tab" aria-controls="tab-dashboard" aria-selected="true">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-orders-link" data-toggle="tab" href="#tab-orders" role="tab" aria-controls="tab-orders" aria-selected="false">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-account-link" data-toggle="tab" href="#tab-account" role="tab" aria-controls="tab-account" aria-selected="false">Account Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Sign Out</a>
                        </li>
                    </ul>
                </aside>

                <div class="col-md-8 col-lg-9 pl-5">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-dashboard" role="tabpanel" aria-labelledby="tab-dashboard-link">
                            <p>Hello <span class="font-weight-normal text-dark">{{ auth()->user()->name }} {{ auth()->user()->surname }}</span>
                                <br>
                                From your account dashboard you can view your <a href="#tab-orders" class="tab-trigger-link link-underline">recent orders</a>, manage your <a href="#tab-address" class="tab-trigger-link">shipping and billing addresses</a>, and <a href="#tab-account" class="tab-trigger-link">edit your password and account details</a>.
                            </p>
                        </div>

                        <div class="tab-pane fade" id="tab-orders" role="tabpanel" aria-labelledby="tab-orders-link">
                            @if(isset($orders) && $orders->count() > 0)
                            <table class="table table-wishlist table-mobile">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th></th>
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
                                                        <img src="{{ asset('storage/uploads/products/'. $product->product_img) }}" alt="Product image">
                                                    </a>
                                                </figure>

                                                <h3 class="product-title">
                                                    <a href="#">{{ $product->product_name }}</a>
                                                </h3>
                                            </div>
                                        </td>
                                        <td class="price-col">{{ $product->product_price }} c</td>
                                        <td class="price-col">{{ $order->updated_at }}</td>
                                        <td class="remove-col">
                                            <form action="" method="post">
                                                <input type="hidden" name="wishlist_id" value="">
                                                <button type="submit" class="btn-remove"><i class="icon-close"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <h3>No orders</h3>
                            @endif
                            @if($orders->count() > 12)
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                            <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                                        </a>
                                    </li>
                                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item-total">of 6</li>
                                    <li class="page-item">
                                        <a class="page-link page-link-next" href="#" aria-label="Next">
                                            Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            @endif
                        </div>

                        <div class="tab-pane fade" id="tab-account" role="tabpanel" aria-labelledby="tab-account-link">
                            <form action="{{ route('profile.update_data') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>First Name *</label>
                                        <input type="text" name="name" class="form-control" value="{{ auth()->user()->name }}" required>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Last Name *</label>
                                        <input type="text" name="surname" class="form-control" value="{{ auth()->user()->surname }}" required>
                                    </div>
                                </div>

                                <label>Email address *</label>
                                <input type="email" name="email" class="form-control" value="{{ auth()->user()->email }}" required>

                                <label>Phone number *</label>
                                <input type="text" name="phone" class="form-control" value="{{ auth()->user()->phone }}" required>

                                <button type="submit" class="btn btn-outline-primary-2 mt-2">
                                    <span>SAVE CHANGES</span>
                                    <i class="icon-long-arrow-right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
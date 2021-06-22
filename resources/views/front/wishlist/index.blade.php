@extends('_layouts.front.app')

@section('content')

<div class="page-content pt-7">
    <div class="container">
        @isset($wishlists)
        <table class="table table-wishlist table-mobile">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Stock Status</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach($wishlists as $wishlist)
                    @foreach($wishlist->products as $product)
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
                            <td class="stock-col"><span class="in-stock">In stock</span></td>
                            <td class="action-col">
                                <div class="dropdown">
                                    <button class="btn btn-block btn-outline-primary-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-list-alt"></i>Select Options
                                    </button>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">First option</a>
                                        <a class="dropdown-item" href="#">Another option</a>
                                        <a class="dropdown-item" href="#">The best option</a>
                                    </div>
                                </div>
                            </td>
                            <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
        @else

        <h3>Empty Wishlist list</h3>

        @endisset
    </div>
</div>

@endsection
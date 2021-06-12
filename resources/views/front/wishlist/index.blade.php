@extends('_layouts.front.app')

@section('content')

<div class="page-content pt-7">
    <div class="container">
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
                <tr>
                    <td class="product-col">
                        <div class="product">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="assets/images/products/table/product-1.jpg" alt="Product image">
                                </a>
                            </figure>

                            <h3 class="product-title">
                                <a href="#">Beige knitted elastic runner shoes</a>
                            </h3><!-- End .product-title -->
                        </div><!-- End .product -->
                    </td>
                    <td class="price-col">$84.00</td>
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
                <tr>
                    <td class="product-col">
                        <div class="product">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="assets/images/products/table/product-2.jpg" alt="Product image">
                                </a>
                            </figure>

                            <h3 class="product-title">
                                <a href="#">Blue utility pinafore denim dress</a>
                            </h3><!-- End .product-title -->
                        </div><!-- End .product -->
                    </td>
                    <td class="price-col">$76.00</td>
                    <td class="stock-col"><span class="in-stock">In stock</span></td>
                    <td class="action-col">
                        <button class="btn btn-block btn-outline-primary-2"><i class="icon-cart-plus"></i>Add to Cart</button>
                    </td>
                    <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                </tr>
                <tr>
                    <td class="product-col">
                        <div class="product">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="assets/images/products/table/product-3.jpg" alt="Product image">
                                </a>
                            </figure>

                            <h3 class="product-title">
                                <a href="#">Orange saddle lock front chain cross body bag</a>
                            </h3><!-- End .product-title -->
                        </div><!-- End .product -->
                    </td>
                    <td class="price-col">$52.00</td>
                    <td class="stock-col"><span class="out-of-stock">Out of stock</span></td>
                    <td class="action-col">
                        <button class="btn btn-block btn-outline-primary-2 disabled">Out of Stock</button>
                    </td>
                    <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
@extends('_layouts.front.app')

@section('content')
<div class="page-content mt-7">
    <div class="container">
        <div class="product-details-top">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-gallery product-gallery-vertical">
                        <div class="row">
                            <figure class="product-main-image border">
                                <img id="product-zoom" src="{{ asset('storage/uploads/products/'. $product->product_img) }}" data-zoom-image="assets/images/products/single/1-big.jpg" alt="product image">

                                <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                    <i class="icon-arrows"></i>
                                </a>
                            </figure>

                            <div id="product-zoom-gallery" class="product-image-gallery">
                                <a class="product-gallery-item" href="#" data-image="{{ asset('storage/uploads/products/'. $product->product_img) }}">
                                    <img src="{{ asset('storage/uploads/products/'. $product->product_img) }}" alt="product side">
                                </a>

                                <!-- <a class="product-gallery-item" href="#" data-image="{{ asset('storage/uploads/products/'. $product->product_img) }}" data-zoom-image="assets/images/products/single/2-big.jpg">
                                    <img src="{{ asset('storage/uploads/products/'. $product->product_img) }}" alt="product cross">
                                </a> -->

                                <!-- <a class="product-gallery-item" href="#" data-image="{{ asset('storage/uploads/products/'. $product->product_img) }}" data-zoom-image="assets/images/products/single/3-big.jpg">
                                    <img src="{{ asset('storage/uploads/products/'. $product->product_img) }}" alt="product with model">
                                </a>

                                <a class="product-gallery-item" href="#" data-image="{{ asset('storage/uploads/products/'. $product->product_img) }}" data-zoom-image="assets/images/products/single/4-big.jpg">
                                    <img src="{{ asset('storage/uploads/products/'. $product->product_img) }}" alt="product back">
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="product-details">
                        <h1 class="product-title">{{ $product->product_name }}</h1>

                        <div class="ratings-container mt-2">
                            <div class="ratings">
                                <div class="ratings-val" style="width: {{ $product->product_rating }}%;"></div>
                            </div>
                        </div>

                        <div class="product-price mt-2">
                            {{ $product->product_price }} сомон
                        </div>

                        <div class="product-content ">
                            <p> {{ $product->product_description }} </p>
                        </div>

                        <div class="details-filter-row details-row-size mt-5">
                            <div class="product-details-quantity">
                                <input type="number" id="qty" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                            </div>
                        </div>

                        <div class="product-details-action mt-5">
                            <form action="{{ route('profile.order_add', ['product' => $product->slug ]) }}" method="post">
                                @csrf
                                <button type="submit" class="btn-product btn-cart border bg-white"><span>add to cart</span></button>
                            </form>
                            <div class="details-action-wrapper">
                                <form action="{{ route('profile.order_add', ['product' => $product->id ]) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-product py-2 border"><i class="icon-shopping-cart"></i><span>Add to installment plan</button>
                                </form>
                                <form action="{{ route('profile.order_add', ['product' => $product->id ]) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-product btn-wishlist"><span>Add to Wishlist</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-details-tab mt-5">
            <ul class="nav nav-pills justify-content-start" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Additional information</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                    <div class="product-desc-content">
                        <h3>Product Information</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>
                        <ul>
                            <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>
                            <li>Vivamus finibus vel mauris ut vehicula.</li>
                            <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>
                        </ul>

                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>
                    </div>
                </div>
                <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                    <div class="product-desc-content">
                        <h3>Information</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>

                        <h3>Fabric & care</h3>
                        <ul>
                            <li>Faux suede fabric</li>
                            <li>Gold tone metal hoop handles.</li>
                            <li>RI branding</li>
                            <li>Snake print trim interior </li>
                            <li>Adjustable cross body strap</li>
                            <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>
                        </ul>

                        <h3>Size</h3>
                        <p>one size</p>
                    </div>
                </div>
            </div>
        </div>

        @include('_components.sliders.testimorials')

    </div>
</div>
@endsection
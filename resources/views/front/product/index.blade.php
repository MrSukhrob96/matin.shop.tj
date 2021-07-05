@extends('_layouts.front.app')

@section('content')

<style>
    .btn.active {
        background-color: #FB5E39 !important;
        color: #fff !important;
    }
</style>

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
                    <form class="product-details" method="post" action="{{ route('profile.to_order', ['product' => $product->slug]) }}">
                        @csrf
                        <h3 class="product-title">{{ $product->product_name }}</h3>
                        <div class="row mt-3">
                            <div class="col">
                                <p class="">цена</p>
                                <div class="product-price">
                                    <span class="mr-1" id="summa">{{ $product->product_price }}</span> сомон
                                </div>
                            </div>
                            <div class="col">
                                <p class="">в рассрочку</p>
                                <div class="product-price">
                                    <span class="mr-1" id="rastrochka">{{ $product->product_price }}</span> сомон
                                </div>
                            </div>
                        </div>

                        <div class="product-content mt-3">
                            <p> {{ $product->product_description }} </p>
                        </div>
                        <section id="contact" class="contact mt-4">
                            <div class="details-filter-row details-row-size">
                                <div class="d-flex flex-wrap justify-content-start">
                                    <div class="col mb-1">
                                        <input type="number" name="order_product_count" id="qty" class="btn form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                    </div>
                                    <input type="hidden" name="">
                                    <div class="col mb-1">
                                        <button type="button" class="btn btn-light border active" id="treeMonth">3 мец</button>
                                    </div>
                                    <div class="col mb-1">
                                        <button type="button" class="btn btn-light border" id="sixMonth">6 мец</button>
                                    </div>
                                    <div class="col mb-1">
                                        <button type="button" class="btn btn-light border" id="oneYear">12 мец</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <button name="buyAvailability" class="border-0 bg-white col-lg-4 col-sm-6 mb-2">
                                    <div class="info-box p-3">
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                            </svg>
                                        </i>
                                        <h3 style="margin: 0px 0px 16px; font-size: 16px"> Купить наличными</h3>
                                    </div>
                                </button>
                                <button name="buyInstallments" class="border-0 bg-white col-lg-4 col-sm-6 mb-2">
                                    <div class="info-box p-3">
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                            </svg>
                                        </i>
                                        <h3 style="margin: 0px 0px 16px; font-size: 16px"> Купить в растрочку</h3>
                                    </div>
                                </button>
                                <a href="{{ route('profile.wishlist_add_get', ['product' => $product->slug]) }}" class="col-lg-4 col-sm-6 mb-2">
                                    <div class="info-box p-3">
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                            </svg>
                                        </i>
                                        <h3 style="margin: 0px 0px 16px; font-size: 16px">Добавить в избранные</h3>
                                    </div>
                                </a>
                            </div>
                        </section>
                    </form>
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
@isset($products)

<section class="mt-5 pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="title text-center mb-7 border-bottom pb-1">
                @isset($title)
                {{ $title }}
                @else
                SIMLAR PRODUCTS
                @endisset
            </h2>
        </div>
    </div>

    <div class="container">
        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                    "nav": false, 
                    "dots": true,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":1
                        },
                        "480": {
                            "items":2
                        },
                        "768": {
                            "items":3
                        },
                        "992": {
                            "items":4
                        },
                        "1200": {
                            "items":4,
                            "nav": true,
                            "dots": false
                        }
                    }
                }'>

            @foreach($products as $product)
            <div class="product product-7 text-center">
                <figure class="product-media">
                    <a href="{{ 
                        route('product_show', 
                                [
                                    'category' => $product->category->slug, 
                                    'product' => $product->slug
                                ]
                            ) 
                    }}">
                        <img src="{{ asset('storage/uploads/products/'.$product->product_img) }}" alt="Product image" class="product-image">
                    </a>

                    <div class="product-action-vertical">
                        <form action="">
                            <button type="submit" class="btn-product-icon btn-wishlist btn-expandable" style="border: none;">
                                <span>add to wishlist</span>
                            </button>
                        </form>
                    </div>

                    <div class="product-action">
                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                    </div>
                </figure>

                <div class="product-body">
                    <h3 class="product-title">
                        <a href="product.html">
                            {{ $product->product_name }}
                        </a>
                    </h3>
                    <div class="product-price">
                        {{ $product->product_price }} сомон
                    </div>
                    <div class="ratings-container">
                        <div class="ratings">
                            <div class="ratings-val" style="width: {{$product->product_rating}}%;"></div>
                        </div>
                        <span class="ratings-text">( 2 Reviews )</span>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="col">
            <div class="more-container text-center mt-2 mb-0">
                <a href="{{ route('products', ['category' => 'all'])}}" class="btn btn-outline-dark-2 btn-round btn-more">
                    <span>Show All</span><i class="icon-long-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

</section>

@endisset
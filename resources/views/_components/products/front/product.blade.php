<div class="col-6 col-md-4 col-lg-4">
    <div class="product product-7 text-center">
        <figure class="product-media">

            @isset($type)
            <span class="product-label label-out">
                {{ $type }}
            </span>
            @endisset

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
                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
            </div>

            <div class="product-action">
                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
            </div>
        </figure>

        <div class="product-body">
            <h3 class="product-title"><a href="#">{{ $product->product_name }}</a></h3>
            <div class="product-price">
                <span class="out-price">{{ $product->product_price }} сомон</span>
            </div>
            <div class="ratings-container">
                <div class="ratings">
                    <div class="ratings-val" style="width: {{$product->product_rating}}%;"></div>
                </div>
                <span class="ratings-text">( 6 Reviews )</span>
            </div>
        </div>
    </div>
</div>
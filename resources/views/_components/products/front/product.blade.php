<div class="col-6 col-md-4 col-lg-4">
    <div class="product product-7 text-center shadow-sm">
        <figure class="product-media">

            @isset($type)
            <span class="product-label label-out">
                {{ $type }}
            </span>
            @endisset
            <a href="{{ 
                        route('product_show', 
                                [
                                    'category' => $product->category[0]->slug, 
                                    'product' => $product->slug
                                ]
                            ) 
                    }}">
                <img src="{{ asset('storage/uploads/products/'.$product->product_img) }}" alt="Product image" class="product-image">
            </a>

            <div class="product-action-vertical">
                <form action="{{ route('profile.wishlist_add', ['product' => $product->slug]) }}" method="post">
                    @csrf
                    <button type="submit" class="btn-product-icon btn-wishlist btn-expandable border-0"><span>add to wishlist</span></button>
                </form>
            </div>

            <div class="product-action">
                <form action="{{ route('profile.order_add', ['product' => $product->slug ]) }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-product btn-cart"><span>add to cart</span></button>
                </form>
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
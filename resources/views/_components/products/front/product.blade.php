<div class="col-6 col-md-4 col-lg-4">
    <div class="product product-7 text-center shadow-sm"
        style="box-shadow: 0 10px 25px 0 rgba(0,0,0,0.3); display: flex; align-items: center; justify-content: center; flex-direction: column;">
        <figure class="product-media" style="background-color: #fff;">

            @isset($type)
                <span class="product-label label-out">
                    {{ $type }}
                </span>
            @endisset
            <a
                href="{{ route('product_show', [
    'category' => $product->category[0]->slug,
    'product' => $product->slug,
]) }}">

                @if ($product->product_img)
                    <img src="{{ asset('storage/uploads/products/' . $product->product_img) }}" alt="Product image"
                        class="product-image"
                        style="max-height: 240px; max-width: 240px; object-fit: cover; padding: 20px">
                @else

                    <img src="{{ asset('storage/uploads/products/noimage.png') }}" alt="Product image"
                        class="product-image"
                        style="max-height: 240px; max-width: 240px; object-fit: cover; padding: 20px">

                @endif
            </a>

            <div class="product-action-vertical">
                <form action="{{ route('profile.wishlist_add', ['product' => $product->slug]) }}" method="post">
                    @csrf
                    <button type="submit" class="btn-product-icon btn-wishlist btn-expandable border-0"><span>Ба рӯйхати
                            мунтахаб</span></button>
                </form>
            </div>
        </figure>

        <div class="product-action">
            <form action="{{ route('profile.order_add', ['product' => $product->slug]) }}" method="post">
                @csrf
                <button type="submit" class="btn btn-product btn-cart" style="cursor: pointer"><span>Ба
                        сабат</span></button>
            </form>
        </div>
        <div class="product-body">
            <h3 class="product-title" style="max-height: 100px; overflow-y: hidden"><a
                    href="#">{{ $product->product_name }}</a></h3>
            <div class="product-price">
                <span class="out-price">{{ $product->product_price }} сомон</span>
            </div>
            <div class="ratings-container">
                <div class="ratings">
                    <div class="ratings-val" style="width: {{ $product->product_rating }}%;"></div>
                </div>

            </div>
        </div>
    </div>
</div>

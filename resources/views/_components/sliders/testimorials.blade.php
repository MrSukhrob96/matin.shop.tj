@isset($products)

    <section class="mt-5 pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="title text-center mb-7 border-bottom pb-1">
                    @isset($title)
                        {{ $title }}
                    @else
                        Маҳсулотҳои монанд
                    @endisset
                </h2>
            </div>
        </div>

        <div class="container">
            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                data-owl-options='{
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

                @foreach ($products as $product)
                    <div class="product product-7 text-center"
                        style="box-shadow: 0 10px 25px 0 rgba(0,0,0,0.1);   display: flex; align-items: center; justify-content: center; flex-direction: column;">
                        <figure class="product-media" style="background-color: #fff;">
                            <a href="{{ route('product_show', ['category' => $product->category[0]->slug, 'product' => $product->slug]) }}">
                                @if ($product->product_img)
                                    <img src="{{ asset('storage/uploads/products/' . $product->product_img) }}"
                                        alt="Product image" class="product-image"
                                        style="max-height: 240px; max-width: 240px; object-fit: cover; background-color: #fff">
                                @else
                                    <img src="{{ asset('storage/uploads/products/noimage.png') }}" alt="Product image"
                                        class="product-image"
                                        style="max-height: 240px; max-width: 240px; object-fit: cover; background-color: #fff">
                                @endif
                            </a>

                            <div class="product-action-vertical">
                                <form action="{{ route('profile.wishlist_add', ['product' => $product->slug]) }}"
                                    method="post">
                                    @csrf
                                    <button type="submit" class="btn-product-icon btn-wishlist btn-expandable border-0">
                                        <span>Ба рӯйхати мунтахаб</span>
                                    </button>
                                </form>
                            </div>
                        </figure>
                        <div class="product-action">
                            <form action="{{ route('profile.order_add', ['product' => $product->slug]) }}" method="post">
                                @csrf
                                <button type="submit" class="btn-product btn-cart">
                                    <span>Ба сабад</span>
                                </button>
                            </form>
                        </div>
                        <div class="product-body">
                            <h3 class="product-title">
                                <span>
                                    {{ $product->product_name }}
                                </span>
                            </h3>
                            <div class="product-price">
                                {{ $product->product_price }} сомон
                            </div>
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: {{ $product->product_rating }}%;"></div>
                                </div>
                                <!-- <span class="ratings-text">( 2 Reviews )</span> -->
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="col">
                <div class="more-container text-center mt-2 mb-0">
                    <a href="{{ route('categories') }}" class="btn btn-outline-dark-2 btn-round btn-more">
                        <span>Намоиш</span><i class="icon-long-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

    </section>

@endisset

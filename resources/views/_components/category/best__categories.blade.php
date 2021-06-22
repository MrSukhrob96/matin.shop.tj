<div class="bg-light deal-container pt-7 pb-7">
    <div class="container">
        <div class="heading text-center mb-4">
            <h2 class="title">Best categories</h2>
            <p class="title-desc"></p>
        </div>
        <div class="row">
            <div class="col-lg-6 deal-col">
                <div class="deal" style="background-image: url('storage/uploads/bg/bg-1.jpg');">
                    <div class="deal-content">
                        <h3 class="product-title"><a href="product.html">Home Smart Speaker with Google Assistant</a></h3><!-- End .product-title -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="products">
                    <div class="row">
                    @foreach($category as $item)
                        <div class="col-6">
                            <div class="product product-2">
                                <figure class="product-media" style="height: 380px;object-fit:cover; background-color: #fff">
                                    <a href="{{ route('products', ['category'=>$item->slug]) }}">
                                        <img src="{{ asset('storage/uploads/categories/'. $item->category_img) }}" alt="Product image" class="product-image">
                                    </a>
                                </figure>

                                <div class="product-body">
                                    <h3 class="product-title">
                                        <a href="{{ route('products', ['category'=>$item->slug]) }}">{{ $item->category_name }}</a>
                                    </h3>
                                </div>
                                <div class="product-price">
                                </div>
                                <div class="ratings-container">
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="more-container text-center mt-3 mb-0">
            <a href="{{ route('categories') }}" class="btn btn-outline-dark-2 btn-round btn-more"><span>SHOW ALL CATEGORIES</span><i class="icon-long-arrow-right"></i></a>
        </div>
    </div>
</div>
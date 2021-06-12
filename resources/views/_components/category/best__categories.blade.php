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
                        <div class="col-6">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('storage/uploads/products/product-5.jpg') }}" alt="Product image" class="product-image">
                                    </a>
                                </figure>

                                <div class="product-body">
                                    <h3 class="product-title">
                                        <a href="product.html">Canon - EOS 5D Mark IV DSLR Camera</a>
                                    </h3>
                                </div>
                                <div class="product-price">
                                </div>
                                <div class="ratings-container">
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-sale">Sale</span>
                                    <a href="product.html">
                                        <img src="{{ asset('storage/uploads/products/product-6.jpg') }}" alt="Product image" class="product-image">
                                    </a>
                                </figure>

                                <div class="product-body">
                                    <h3 class="product-title">
                                        <a href="product.html">Apple - Smart Keyboard Folio for 11-inch iPad Pro</a>
                                    </h3>
                                </div>
                                <div class="product-price">
                                </div>
                                <div class="ratings-container">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="more-container text-center mt-3 mb-0">
            <a href="{{
                route('products', ['category'=>'all'])
            }}" class="btn btn-outline-dark-2 btn-round btn-more"><span>SHOW ALL CATEGORIES</span><i class="icon-long-arrow-right"></i></a>
        </div>
    </div>
</div>
@extends('_layouts.front.app')

@section('content')

<div class="page-content mt-7 mb-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="toolbox">
                    <div class="toolbox-right">
                        <div class="toolbox-sort">
                            <label for="sortby">Ҷобаҷокунӣ:</label>
                            <div class="select-custom">
                                <select name="sortby" id="sortby" class="form-control">
                                    <option value="popularity" selected="selected">Молҳои номӣ</option>
                                    <option value="rating">От А до Я</option>
                                    <option value="rating">Аз А то Я</option>
                                    <option value="rating">Аз Я то А</option>
                                    <option value="rating">Молҳои нав</option>
                                    <option value="rating">Молҳои гарон</option>
                                    <option value="date">Молҳои арзон</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="products mb-3">
                    <div class="row justify-content-center">
                        @foreach($products as $product)
                        @foreach($product as $item)
                        @include("_components.products.front.product", ["product" => $item])
                        @endforeach
                        @endforeach
                    </div>
                </div>

                @if(count($products) > 0)
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Пеш
                            </a>
                        </li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item-total">of 6</li>
                        <li class="page-item">
                            <a class="page-link page-link-next" href="#" aria-label="Next">
                                Баъд <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
                @endif
            </div>

            @include('_components.filter.product_filter')

        </div>
    </div>
</div>
@endsection
@extends('_layouts.front.app')

@section('content')

<div class="page-content mt-7 mb-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="toolbox">
                    <div class="toolbox-right">
                        <div class="toolbox-sort">
                            <label for="sortby">Сортировать по:</label>
                            <div class="select-custom">
                                <select name="sortby" id="sortby" class="form-control">
                                    <option value="popularity" selected="selected">популярный вещи</option>
                                    <option value="rating">От А до Я</option>
                                    <option value="rating">От Я до А</option>
                                    <option value="rating">Новинки выше</option>
                                    <option value="rating">Дорогие выше</option>
                                    <option value="date">Дешевие выше</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="products mb-3">
                    <div class="row justify-content-center">
                        @if(isset($products) && count($products) > 0)
                            @foreach($products as $product)
                                @include("_components.products.front.product", ["product" => $product])
                            @endforeach
                        @else 
                            <h4>No products</h4>
                        @endif
                    </div>
                </div>

                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        {{ $products->links() }}
                    </ul>
                </nav>
            </div>

            @include('_components.filter.product_filter')

        </div>
    </div>
</div>
@endsection
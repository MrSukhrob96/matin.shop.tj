@extends('_layouts.front.app')

@section('content')

<div class="page-content mt-7 mb-7">
    <div class="container">
		@if($products->count() > 0)
        <div class="row">
            <div class="col-lg-9">
                <div class="toolbox">
                    <div class="toolbox-right">
                        <div class="toolbox-sort">
                            <label for="sortby">Ҷобаҷокунӣ:</label>
                            <div class="select-custom">
                                <select name="sortby" id="sortby" class="form-control">
                                    <option value="popularity" selected="selected">Молҳои номӣ</option>
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
							@include("_components.products.front.product", ["product" => $product])
                        @endforeach
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
		@else
			<h4 class="text-bold">Маҳсулот вуҷуд надорад</h4>
		@endif
    </div>
</div>
@endsection
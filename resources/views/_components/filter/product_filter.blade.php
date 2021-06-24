<aside class="col-lg-3 order-lg-first" id="filters">
    <div class="sidebar sidebar-shop">
        <div class="widget widget-clean">
            <label>Filters:</label>
            <a href="#" class="sidebar-filter-clear">Clean All</a>
        </div>
        <form action="{{ route('filter_categories') }}" method="post">
            @csrf
            @if(isset($subcategories) && $subcategories->count())
            <div class="widget widget-collapsible" style="max-height: 250px; overflow-y: scroll">
                <h3 class="widget-title">
                    <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
                        Category
                    </a>
                </h3>

                <div class="collapse show" id="widget-1">
                    <div class="widget-body">
                        <div class="filter-items filter-items-count">
                            @foreach($subcategories as $category)
                            <div class="filter-item">
                                <div class="custom-control custom-checkbox">
                                    <input ref="filter_categories" type="checkbox" name="categories[{{ $category->id }}]" class="custom-control-input" data-category="{{ $category->slug }}" id="cat-{{ $category->id }}">
                                    <label class="custom-control-label" for="cat-{{ $category->id }}">{{ $category->sub_category_name }}</label>
                                </div>
                                <span class="item-count">
                                    {{ $category->products()->count() }}
                                </span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if(isset($brands) && $brands->count())
            <div class="widget widget-collapsible" style="max-height: 250px; overflow-y: scroll">
                <h3 class="widget-title">
                    <a data-toggle="collapse" href="#widget-4" role="button" aria-expanded="true" aria-controls="widget-4">
                        Brand
                    </a>
                </h3>

                <div class="collapse show" id="widget-4">
                    <div class="widget-body">
                        <div class="filter-items">
                            @foreach($brands as $brand)
                            <div class="filter-item" onclick="init()">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="brands[{{ $brand->id }}]" data-brand="{{ $brand->id }}" id="brand-{{ $brand->id }}">
                                    <label class="custom-control-label" for="brand-{{ $brand->id }}">{{ $brand->name }}</label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="widget widget-collapsible">
                <h3 class="widget-title">
                    <a data-toggle="collapse" href="#widget-5" role="button" aria-expanded="true" aria-controls="widget-5">
                        Price
                    </a>
                </h3>

                <div class="collapse show" id="widget-5">
                    <div class="widget-body">
                        <div class="row">
                            <div class="col">
                                <input type="text" name="price_start" class="form-control" value="0">
                            </div>_
                            <div class="col">
                                <input type="text" name="price_end" class="form-control" value="20000">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Search</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</aside>
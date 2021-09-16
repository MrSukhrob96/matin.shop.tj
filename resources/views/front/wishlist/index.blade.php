@extends('_layouts.front.app')

@section('content')

<div class="page-content pt-7">
    <div class="container">
        @if(isset($wishlists) && $wishlists->count() > 0)
        <table class="table table-wishlist table-mobile">
            <thead>
                <tr>
                    <th>Маҳсулот</th>
                    <th>Нарх</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                
                @foreach($wishlists as $wishlist)
                @foreach($wishlist->products as $product)
                <tr>
                    <td class="product-col">
                        <div class="product">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="{{ asset('storage/uploads/products/'. $product->product_img) }}" alt="Product image">
                                </a>
                            </figure>

                            <h3 class="product-title">
                                <a href="#">{{ $product->product_name }}</a>
                            </h3>
                        </div>
                    </td>
                    <td class="price-col">{{ $product->product_price }} c</td>
                    <td class="action-col">
                        <form action="{{ route('profile.order_add', ['product' => $product->slug ]) }}" method="post">
                            @csrf
                            <button class="btn btn-block btn-outline-primary-2" type="submit">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                </i> Вориди сабат
                            </button>
                        </form>
                    </td>
                    <td class="remove-col">
                        <form action="{{ route('profile.wishlist_remove', ['product' => $product->id]) }}" method="post">
                        <input type="hidden" name="wishlist_id" value="{{ $wishlist->id }}">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn-remove"><i class="icon-close"></i></button>
                        </form>
                    </td>
                </tr>
                </form>
                @endforeach
                @endforeach
            </tbody>
        </table>
        @else

        <h3>Рӯйхати мунтахаб холи аст...</h3>

        @endif
    </div>
</div>

@endsection
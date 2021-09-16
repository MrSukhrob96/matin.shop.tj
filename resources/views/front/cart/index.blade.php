@extends('_layouts.front.app')

@section('content')

<div class="page-content mt-7">
    <div class="cart">
        <div class="container">
            @if(isset($orders) && $orders->count() > 0)
            <div class="row">
                <div class="col-lg-9">
                    <table class="table table-cart table-mobile">
                        <thead>
                            <tr>
                                <th>Маҳсулот</th>
                                <th>Нарх</th>
                                <th>Хориҷ</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($orders as $order)
                            @foreach($order->products as $product)
                            <tr>
                                <td class="product-col">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="{{ asset('storage/uploads/products/' . $product->product_img) }}" alt="Product image">
                                            </a>
                                        </figure>

                                        <h3 class="product-title">
                                            <a href="#">{{ $product->product_name }}</a>
                                        </h3>

                                    </div>
                                </td>
                                <td class="price-col"> <span id="productPrice">{{ $product->product_price }} </span> с</td>
                                <td class="remove-col">
                                    <form action="{{ route('profile.order_remove', ['order' => $order->id]) }}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn-remove"><i class="icon-close"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <aside class="col-lg-3">
                    <div class="summary summary-cart">
                        <h3 class="summary-title">Ҷамъ дар сабад</h3>

                        <table class="table table-summary">
                            <tbody id="productTotalPrice">
                                <?php $totalSumma = 0;
                                $i = 1; ?>

                                @foreach($orders as $order)
                                @foreach($order->products as $product)
                                <tr data-index="{{ $i }}">
                                    <td>Маҳсулот №{{ $i }}:</td>
                                    <td>{{ $product->product_price }} сомонӣ</td>
                                    <?php $totalSumma += $product->product_price;
                                    $i++; ?>
                                </tr>
                                @endforeach
                                @endforeach
                                <tr class="summary-subtotal">
                                    <td>Ҷамъ:</td>
                                    <td> <?php echo $totalSumma; ?> сомонӣ</td>
                                </tr>
                            </tbody>
                        </table>
                        <form action="{{ route('profile.order_update') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-sm-6">
                                    <button class="btn btn-outline-primary-2 btn-order btn-block mb-1" type="submit" name="buyInstallments">
                                        Харид бо насия
                                    </button>
                                </div>
                                <div class="col-lg-12 col-sm-6">
                                    <button class="btn btn-outline-primary-2 btn-order btn-block" type="submit" name="buyAvailability">
                                        Харид бе насия
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </aside>
            </div>
            @else
            <div class="row">
                <div class="col-12">
                    <h3>Сабат холӣ аст...</h3>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

@endsection
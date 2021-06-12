@extends('_layouts.front.app')

@section('content')

<div class="page-content mt-7">
    <div class="checkout">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-lg-9">                       
                        <div class="row">
                            <div class="col-sm-6">
                                <label>First Name *</label>
                                <input type="text" class="form-control" required>
                            </div>

                            <div class="col-sm-6">
                                <label>Last Name *</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <label>Town / City *</label>
                                <input type="text" class="form-control" required>
                            </div>

                            <div class="col-sm-6">
                                <label>Street address *</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <label>Email address</label>
                                <input type="email" class="form-control" required>
                            </div>

                            <div class="col-sm-6">
                                <label>Phone *</label>
                                <input type="tel" class="form-control" required>
                            </div>
                        </div>


                        <label>Order notes (optional)</label>
                        <textarea class="form-control" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                    </div>
                    <aside class="col-lg-3">
                        <div class="summary">
                            <h3 class="summary-title">Your Order</h3>

                            <table class="table table-summary">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td><a href="#">Beige knitted elastic runner shoes</a></td>
                                        <td>$84.00</td>
                                    </tr>

                                    <tr>
                                        <td><a href="#">Blue utility pinafore denimdress</a></td>
                                        <td>$76,00</td>
                                    </tr>
                                    <tr class="summary-subtotal">
                                        <td>Subtotal:</td>
                                        <td>$160.00</td>
                                    </tr>
                                    <tr class="summary-total">
                                        <td>Total:</td>
                                        <td>$160.00</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="accordion-summary" id="accordion-payment">
                                <div class="card">
                                    <div class="card-header" id="heading-1">
                                        <h2 class="card-title">
                                            <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                                Direct bank transfer
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-payment">
                                        <div class="card-body">
                                            Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="heading-5">
                                        <h2 class="card-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                                Credit Card (Stripe)
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion-payment">
                                        <div class="card-body"> Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit ame.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                <span class="btn-text">Place Order</span>
                                <span class="btn-hover-text">Proceed to Checkout</span>
                            </button>
                        </div>
                    </aside>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
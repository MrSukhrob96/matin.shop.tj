@extends('_layouts.front.app')

@section('content')
<div class="page-content pt-7">
    <div class="dashboard">
        <div class="container">
            <div class="row">
                <aside class="col-md-4 col-lg-3 border-right">
                    <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="tab-dashboard-link" data-toggle="tab" href="#tab-dashboard" role="tab" aria-controls="tab-dashboard" aria-selected="true">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-orders-link" data-toggle="tab" href="#tab-orders" role="tab" aria-controls="tab-orders" aria-selected="false">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-downloads-link" data-toggle="tab" href="#tab-downloads" role="tab" aria-controls="tab-downloads" aria-selected="false">Downloads</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-address-link" data-toggle="tab" href="#tab-address" role="tab" aria-controls="tab-address" aria-selected="false">Adresses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-account-link" data-toggle="tab" href="#tab-account" role="tab" aria-controls="tab-account" aria-selected="false">Account Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Sign Out</a>
                        </li>
                    </ul>
                </aside>

                <div class="col-md-8 col-lg-9 pl-5">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-dashboard" role="tabpanel" aria-labelledby="tab-dashboard-link">
                            <p>Hello <span class="font-weight-normal text-dark">User</span>
                                <br>
                                From your account dashboard you can view your <a href="#tab-orders" class="tab-trigger-link link-underline">recent orders</a>, manage your <a href="#tab-address" class="tab-trigger-link">shipping and billing addresses</a>, and <a href="#tab-account" class="tab-trigger-link">edit your password and account details</a>.
                            </p>
                        </div>

                        <div class="tab-pane fade" id="tab-orders" role="tabpanel" aria-labelledby="tab-orders-link">
                            <p>No order has been made yet.</p>
                            <a href="category.html" class="btn btn-outline-primary-2"><span>GO SHOP</span><i class="icon-long-arrow-right"></i></a>
                        </div>

                        <div class="tab-pane fade" id="tab-downloads" role="tabpanel" aria-labelledby="tab-downloads-link">
                            <p>No downloads available yet.</p>
                            <a href="category.html" class="btn btn-outline-primary-2"><span>GO SHOP</span><i class="icon-long-arrow-right"></i></a>
                        </div>

                        <div class="tab-pane fade" id="tab-address" role="tabpanel" aria-labelledby="tab-address-link">
                            <p>The following addresses will be used on the checkout page by default.</p>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card card-dashboard">
                                        <div class="card-body">
                                            <h3 class="card-title">Billing Address</h3><!-- End .card-title -->

                                            <p>User Name<br>
                                                User Company<br>
                                                John str<br>
                                                New York, NY 10001<br>
                                                1-234-987-6543<br>
                                                yourmail@mail.com<br>
                                                <a href="#">Edit <i class="icon-edit"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card card-dashboard">
                                        <div class="card-body">
                                            <h3 class="card-title">Shipping Address</h3><!-- End .card-title -->

                                            <p>You have not set up this type of address yet.<br>
                                                <a href="#">Edit <i class="icon-edit"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-account" role="tabpanel" aria-labelledby="tab-account-link">
                            <form action="#">
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

                                <label>Display Name *</label>
                                <input type="text" class="form-control" required>
                                <small class="form-text">This will be how your name will be displayed in the account section and in reviews</small>

                                <label>Email address *</label>
                                <input type="email" class="form-control" required>

                                <label>Current password (leave blank to leave unchanged)</label>
                                <input type="password" class="form-control">

                                <label>New password (leave blank to leave unchanged)</label>
                                <input type="password" class="form-control">

                                <label>Confirm new password</label>
                                <input type="password" class="form-control mb-2">

                                <button type="submit" class="btn btn-outline-primary-2">
                                    <span>SAVE CHANGES</span>
                                    <i class="icon-long-arrow-right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('_layouts.front.app')

@section('content')
<section class="mt-7 mb-7">
    <div class="login-page">
        <div class="container">
            <div class="form-box">
                <div class="form-tab">
                    <ul class="nav nav-pills nav-fill" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="false">Register</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
                            <form action="{{ route('signup_post') }}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="user_name">Name</label>
                                        <input type="text" id="user_name" class="form-control" name="name" placeholder="Alex" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="user_surname">Second Name</label>
                                        <input type="text" id="user_surname" class="form-control" name="surname" placeholder="Braund" required>
                                    </div>

                                    <div class="col-12">
                                        <label for="user_email">Email Address</label>
                                        <input type="email" id="user_email" class="form-control" name="email" placeholder="alexbraun@gmail.com" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="user_phone">Phone number</label>
                                        <input type="text" id="user_phone" class="form-control" name="phone" placeholder="92-635-24-44" maxlength="9" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="user_password">Password</label>
                                        <input type="password" id="user_password" class="form-control" name="password" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="user_password_confirm">Password Confirm</label>
                                        <input type="password" id="user_password_confirm" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-outline-primary-2">
                                        <span>SIGN UP</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>

                                    <!-- <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="register-policy-2" >
                                        <label class="custom-control-label" for="register-policy-2">I agree to the <a href="#">privacy policy</a> *</label>
                                    </div> -->
                                </div>
                            </form>
                            <!-- <div class="form-choice">
                                <p class="text-center">or sign in with</p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="#" class="btn btn-login btn-g">
                                            <i class="icon-google"></i>
                                            Login With Google
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="#" class="btn btn-login  btn-f">
                                            <i class="icon-facebook-f"></i>
                                            Login With Facebook
                                        </a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
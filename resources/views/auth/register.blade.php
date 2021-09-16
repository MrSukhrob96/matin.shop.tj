@extends('_layouts.front.app')

@section('content')
<section class="mt-7 mb-7">
    <div class="login-page">
        <div class="container">
            <div class="form-box">
                <div class="form-tab">
                    <ul class="nav nav-pills nav-fill" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="false">БА ҚАЙДГИРӢ</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
                            <form action="{{ route('signup_post') }}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="user_name">Ном</label>
                                        <input type="text" id="user_name" class="form-control" name="name" autocomplete="off" placeholder="Alex" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="user_surname">Насаб</label>
                                        <input type="text" id="user_surname" class="form-control" name="surname" autocomplete="off" placeholder="Braund" required>
                                    </div>

                                    <div class="col-12">
                                        <label for="user_email">Логин</label>
                                        <input type="email" id="user_email" class="form-control" name="email" autocomplete="off" placeholder="alexbraun@gmail.com" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="user_phone">Рақами телефон</label>
                                        <input type="text" id="user_phone" class="form-control" name="phone" autocomplete="off" placeholder="92-635-24-44" maxlength="9" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="user_password">Парол</label>
                                        <input type="password" id="user_password" class="form-control" autocomplete="off" name="password" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="user_password_confirm">Парол такрор</label>
                                        <input type="password" id="user_password_confirm" class="form-control" autocomplete="off" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-outline-primary-2">
                                        <span>Қайд кардан</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
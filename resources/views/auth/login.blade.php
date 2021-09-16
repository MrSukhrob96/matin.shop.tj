@extends('_layouts.front.app')

@section('content')
<section class="mt-7 mb-7">
    <div class="login-page">
        <div class="container">
            <div class="form-box">
                <div class="form-tab">
                    <ul class="nav nav-pills nav-fill" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab" aria-controls="signin-2" aria-selected="false">ДАРОМАД БА УТОҚИ ШАХСӢ</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="singin-email-2">Логин</label>
                                    <input type="text" class="form-control" id="singin-email-2" name="email" autocomplete="off" required>
                                </div>

                                <div class="form-group">
                                    <label for="singin-password-2">Парол</label>
                                    <input type="password" class="form-control" id="singin-password-2" autocomplete="off" name="password" required>
                                </div>

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-outline-primary-2">
                                        <span>РАФТЕМ</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>

                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="signin-remember-2" name="remember_me">
                                        <label class="custom-control-label" for="signin-remember-2">Ба хотир нигоҳ доштан</label>
                                    </div>
                                </div>
                                <div class="text-left">
                                    <p><a href="{{ route('signup_get') }}">Бақайдгирӣ</a></p>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Matin Shop</title>

    <link rel="shortcut icon" href="assets/images/logo/logo.png">
    <link href="{{ asset('assets/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/app.min.css') }}" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="layout">
            <div class="header">
                <div class="logo logo-dark">
                    <a href="{{ route('admin.home') }}">
                        <img class="mt-2" src="{{ asset('assets/admin/images/logo/logo.png') }}" alt="Logo">
                        <img class="logo-fold mt-3 ml-3" width="40" height="40" src="{{ asset('assets/admin/images/logo/logo.png') }}" alt="Logo">
                    </a>
                </div>
                <div class="logo logo-white">
                    <a href="index.html">
                        <img src="{{ asset('assets/admin/images/logo/logo-white.png') }}" alt="Logo">
                        <img class="logo-fold" src="{{ asset('assets/admin/images/logo/logo-fold-white.png') }}" alt="Logo">
                    </a>
                </div>
                <div class="nav-wrap">
                    <ul class="nav-left">
                        <li class="desktop-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li class="mobile-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="dropdown dropdown-animated scale-left">
                            <div class="pointer" data-toggle="dropdown">
                                <div class="avatar avatar-image  m-h-10 m-r-15">
                                    <img src="{{ asset('assets/admin/images/avatars/thumb-3.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                                <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                    <div class="d-flex m-r-50">
                                        <div class="avatar avatar-lg avatar-image">
                                            <img src="{{ asset('assets/admin/images/avatars/thumb-3.jpg') }}" alt="">
                                        </div>
                                        <div class="m-l-10">
                                            @auth
                                            <p class="m-b-0 pt-2 text-dark font-weight-semibold">{{ auth()->user()->name }}</p>
                                            @else
                                            <p class="m-b-0 pt-2 text-dark font-weight-semibold">Admin</p>
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                            <span class="m-l-10">Edit Profile</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                            <span class="m-l-10">Logout</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav">
                <div class="side-nav-inner">
                    <ul class="side-nav-menu scrollable">
                        <li class="nav-item dropdown open">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-dashboard"></i>
                                </span>
                                <span class="title">Приборная панель</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu" id="menu_list">
                                <li class="active">
                                    <a href="{{ route('admin.orders.index') }}">Заказы</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.products.index') }}">Продукты</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.categories.index') }}">Категории</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.brands.index') }}">Бренды</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.clients.index') }}">Клиенты</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.cities.index') }}">Города</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.users.index') }}">Пользователи</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.news.index') }}">Новости</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-container">
                @yield('content')
                <footer class="footer">
                    <div class="footer-content">
                        <p class="m-b-0">Copyright © 2021</p>
                        <span>
                            <a href="" class="text-gray m-r-15">matin.shop.tj</a>
                            <a href="" class="text-gray">matin.tj</a>
                        </span>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/admin/js/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/pages/dashboard-e-commerce.js') }}"></script>
    <script src="{{ asset('assets/admin/js/app.min.js') }}"></script>

</body>

</html>
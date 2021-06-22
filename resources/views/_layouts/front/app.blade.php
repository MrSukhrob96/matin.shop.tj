<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Matin Shop</title>

    <meta name="keywords" content="Matin MDO SHOP MARKET Computer">
    <meta name="description" content="Matin Shop">
    <meta name="author" content="p-themes">


    <meta name="apple-mobile-web-app-title" content="Matin">
    <meta name="application-name" content="Matin">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{ asset('assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/skins/skin-demo-3.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demos/demo-3.css') }}">
</head>
<style>
    .product-action form button{
        width: calc(1200px / 4 - 24px) !important;
        border: 1px solid #FB5E39 !important;
    }
</style>
<body>
    <div class="page-wrapper">

        @include("_components.header.front.index")

        <main class="main">

            @yield('content')

        </main>

        @include("_components.footer.front.footer")

    </div>
    
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <div class="mobile-menu-overlay"></div>

    @include("_components.sidebar_menu.front.navbar_menu", ['categories' => $categories])

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.hoverIntent.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/superfish.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-input-spinner.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.plugin.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
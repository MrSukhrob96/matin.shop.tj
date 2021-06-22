<div class="header-bottom sticky-header">
    <div class="container pt-1 pb-1">
        <div class="header-left">
            <div class="dropdown category-dropdown">
                <a href="{{ route('categories') }}" class="dropdown-toggle border" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                    ALL CATEGORIES <i class="icon-angle-down"></i>
                </a>

                <div class="dropdown-menu">
                    <nav class="side-nav">
                        <ul class="menu-vertical sf-arrows">
                            <li class="item-lead">
                                <a href="{{ route('categories') }}">ALL CATEGORIES</a>
                            </li>
                            @foreach($categories as $category)
                            <li class="item-lead">
                                <a href="{{ route('products', ['category' => $category->slug]) }}">{{ $category->category_name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="header-center">
            <nav class="main-nav">
                <ul class="menu sf-arrows">
                    <li class="megamenu-container active">
                        <a href="{{ route('home') }}" class="sf">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('info.about') }}" class="sf">About</a>
                    </li>
                    <li>
                        <a href="{{ route('info.rastrochka') }}" class="sf">Rastrochka</a>
                    </li>
                    <li>
                        <a href="{{ route('info.vozvrat') }}" class="sf">Vozvrat</a>
                    </li>
                    <li>
                        <a href="{{ route('info.delivery') }}" class="sf">Dostavka</a>
                    </li>
                    <li>
                        <a href="{{ route('info.contact') }}" class="sf">Contact</a>
                    </li>
                    <li>
                        <a href="{{ route('news') }}" class="sf">News</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="header-right">

            <div class="header-dropdown">
                <a href="#">Регион: Худжанд</a>
                <div class="header-menu">
                    <ul>
                        <li><a href="#" style="color: #000;">Худжанд</a></li>
                        <li><a href="#" style="color: #000;">Душанбе</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
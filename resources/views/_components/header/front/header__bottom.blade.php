<div class="header-bottom sticky-header">
    <div class="container pt-1 pb-1">
        <div class="header-left">
            <div class="dropdown category-dropdown pr-5">
                <a href="{{ route('categories') }}" class="dropdown-toggle border" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                    КАТЕГОРИЯҲО <i class="icon-angle-down"></i>
                </a>

                <div class="dropdown-menu">
                    <nav class="side-nav">
                        <ul class="menu-vertical sf-arrows">
                            <li class="item-lead">
                                <a href="{{ route('categories') }}">КАТЕГОРИЯҲО</a>
                            </li>
                            @isset($categories)
                            @foreach($categories as $category)
                            <li class="item-lead">
                                <a href="{{ route('products', ['category' => $category->slug]) }}">{{ $category->category_name }}</a>
                            </li>
                            @endforeach
                            @endisset
                        </ul>
                    </nav>
                </div>
            </div>

        </div>

        <div class="header-center">
            <nav class="main-nav">
                <ul class="menu sf-arrows">
                    <li class="megamenu-container active">
                        <a href="{{ route('home') }}" class="sf">Асосӣ</a>
                    </li>
                    <li>
                        <a href="{{ route('info.about') }}" class="sf">Оиди мо</a>
                    </li>
                    <li>
                        <a href="{{ route('info.rastrochka') }}" class="sf">Оиди нассия</a>
                    </li>
                    <li>
                        <a href="{{ route('info.contact') }}" class="sf">Суроға</a>
                    </li>
                    <li>
                        <a href="{{ route('news') }}" class="sf">Хабарҳо</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="header-right">

            <div class="header-dropdown">
                <a href="#">Шаҳр: Хуҷанд</a>
                <div class="header-menu">
                    <ul>
                        <li><a href="#" style="color: #000;">Хуҷанд</a></li>
                        <li><a href="#" style="color: #000;">Душанбе</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
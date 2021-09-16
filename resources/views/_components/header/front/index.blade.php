<header class="header header-intro-clearance header-3">

    @include('_components.header.front.header__top')

    <div class="header-middle">
        <div class="container">
            <div class="header-left">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('assets/img/icons/logo.png') }}" alt="Molla Logo" width="50" height="50">
                </a>
            </div>

            <div class="header-center">
                <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                    <form action="{{ route('search.show') }}" method="post">
                        @csrf
                        <div class="header-search-wrapper search-wrapper-wide">
                            <label for="q" class="sr-only">Search</label>
                            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                            <input type="search" name="searching_post" class="form-control" id="q" placeholder="Ҷустуҷӯ ...">
                        </div>
                        <button type="submit" class="search-toggle" role="button">
                                <i class="icon-search"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="header-right">
                <div class="dropdown compare-dropdown">
                    <a href="{{ route('profile.main') }}" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false" data-display="static" title="Compare Products" aria-label="Compare Products">
                        <div class="icon">
                            <i class="icon-user"></i>
                        </div>
                        <p>Утоқи шахсӣ</p>
                    </a>
                </div>

                <div class="wishlist">
                    <a href="{{ route('profile.wishlist') }}" title="Wishlist">
                        <div class="icon">
                            <i class="icon-heart-o"></i>
                            @if(session()->has('wishlist_count') && session()->get('wishlist_count') > 0)
                            <span class="wishlist-count badge">
                                {{ session()->get('wishlist_count') }}
                            </span>
                            @endif
                        </div>
                        <p>Рӯйхати мунтахаб</p>
                    </a>
                </div>

                <div class="dropdown cart-dropdown">
                    <a href="{{ route('profile.order') }}" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <div class="icon">
                            <i class="icon-shopping-cart"></i>
                            @if(session()->has('cart_count') && session()->get('cart_count') > 0)
                            <span class="cart-count">
                                {{ session()->get('cart_count') }}
                            </span>
                            @endif
                        </div>
                        <p>Сабад</p>
                    </a>
                </div>
				<button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>
            </div>
        </div>
    </div>

    @include('_components.header.front.header__bottom')

</header>
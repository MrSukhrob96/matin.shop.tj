<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="#" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Ҷустуҷӯ</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Ҷустуҷӯ..." required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form>

        <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Меню</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Категорияҳо</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                <nav class="mobile-nav">
                    <ul class="mobile-menu">

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
            <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                <nav class="mobile-nav">
                    <ul class="mobile-menu">
                        @foreach($categories as $category)
                        <li>
                            <a href="{{ route('products', ['category'=>$category->slug] ) }}">{{ $category->category_name }}</a>
                            <ul>
                                @foreach($category->sub_category as $sub_category)
                                <li><a href="{{ route('sub_categories', ['sub_category' => $sub_category->slug]) }}">{{ $sub_category->sub_category_name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
        </div>
    </div>
</div>
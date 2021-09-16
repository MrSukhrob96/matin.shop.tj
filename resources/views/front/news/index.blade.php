@extends('_layouts.front.app')

@section('content')

<div class="page-content mt-7">
    <div class="container">
		@if($news->count() > 0)
        <div class="row">
            <div class="col-lg-9">
                @foreach($news as $item)
                <article class="entry entry-list pr-3">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="{{ asset('assets/img/no-image.jpg') }}" alt="image desc">
                                </a>
                            </figure>
                        </div>

                        <div class="col-md-7">
                            <div class="entry-body">
                                <div class="entry-meta">
                                    <a href="#">{{ $item->created_at }}</a>
                                </div>

                                <h2 class="entry-title">
                                    <a href="single.html">{{ $item->news_title }}</a>
                                </h2>

                                <div class="entry-content">
                                    <p>{{ $item->news_text }}</p>
                                    <a href="single.html" class="read-more">Show All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
				
				@if($news->count() > 6)
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Ба қафо
                            </a>
                        </li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item">
                            <a class="page-link page-link-next" href="#" aria-label="Next">
                                Ба пеш <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
				@endif
            </div>

            <aside class="col-lg-3 border-left">
                <div class="sidebar pl-3">
					@if($news->count() > 0)
                    <div class="widget widget-cats">
                        <h3 class="widget-title py-3">Категорияҳои навид</h3>
                        <ul>
                            <li><a href="#">MDO Matin<span>3</span></a></li>
                            <li><a href="#">Shopping<span>3</span></a></li>
                        </ul>
                    </div>
					@endif
					@if($last_news->count() > 0)
                    <div class="widget">
                        <h3 class="widget-title">Навигариҳои охирин</h3>
						
                        <ul class="posts-list">

                            @foreach($last_news as $item)
                            <li>
                                <figure>
                                    <a href="#">
                                        @if($item->news_img)
                                        <img src="{{ $item->news_img }}" alt="post">
                                        @else
                                        <img src="{{ asset('assets/img/no-image.jpg') }}" alt="image desc">
                                        @endif
                                    </a>
                                </figure>

                                <div>
                                    <span>{{ $item->created_at ?? Date('Y-m-d:H-s-m') }}</span>
                                    <h4><a href="#">{{ $item->news_title }}</a></h4>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
					@endif
                </div>
            </aside>
        </div>
		@else
			<h4>Навигари вуҷуд надорад</h4>
		@endif
    </div>
</div>

@endsection
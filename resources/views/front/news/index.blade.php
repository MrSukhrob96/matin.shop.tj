@extends('_layouts.front.app')

@section('content')

<div class="page-content mt-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                @foreach($news as $item)
                <article class="entry entry-list pr-3">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="assets/images/blog/listing/post-1.jpg" alt="image desc">
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
                                    <a href="single.html" class="read-more">Show</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach

                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                            </a>
                        </li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item">
                            <a class="page-link page-link-next" href="#" aria-label="Next">
                                Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <aside class="col-lg-3 border-left">
                <div class="sidebar pl-3">
                    <div class="widget widget-search">
                        <h3 class="widget-title">Search</h3><!-- End .widget-title -->

                        <form action="#">
                            <label for="ws" class="sr-only">Search in blog</label>
                            <input type="search" class="form-control" name="ws" id="ws" placeholder="Search in blog" required>
                            <button type="submit" class="btn"><i class="icon-search"></i><span class="sr-only">Search</span></button>
                        </form>
                    </div>

                    <div class="widget widget-cats">
                        <h3 class="widget-title">Categories</h3>

                        <ul>
                            <li><a href="#">Lifestyle<span>3</span></a></li>
                            <li><a href="#">Shopping<span>3</span></a></li>
                            <li><a href="#">Fashion<span>1</span></a></li>
                            <li><a href="#">Travel<span>3</span></a></li>
                            <li><a href="#">Hobbies<span>2</span></a></li>
                        </ul>
                    </div>

                    <div class="widget">
                        <h3 class="widget-title">Last News</h3>

                        <ul class="posts-list">
                            <li>
                                <figure>
                                    <a href="#">
                                        <img src="assets/images/blog/sidebar/post-1.jpg" alt="post">
                                    </a>
                                </figure>

                                <div>
                                    <span>Nov 22, 2018</span>
                                    <h4><a href="#">Aliquam tincidunt mauris eurisus.</a></h4>
                                </div>
                            </li>
                            <li>
                                <figure>
                                    <a href="#">
                                        <img src="assets/images/blog/sidebar/post-2.jpg" alt="post">
                                    </a>
                                </figure>

                                <div>
                                    <span>Nov 19, 2018</span>
                                    <h4><a href="#">Cras ornare tristique elit.</a></h4>
                                </div>
                            </li>
                            <li>
                                <figure>
                                    <a href="#">
                                        <img src="assets/images/blog/sidebar/post-3.jpg" alt="post">
                                    </a>
                                </figure>

                                <div>
                                    <span>Nov 12, 2018</span>
                                    <h4><a href="#">Vivamus vestibulum ntulla nec ante.</a></h4>
                                </div>
                            </li>
                            <li>
                                <figure>
                                    <a href="#">
                                        <img src="assets/images/blog/sidebar/post-4.jpg" alt="post">
                                    </a>
                                </figure>

                                <div>
                                    <span>Nov 25, 2018</span>
                                    <h4><a href="#">Donec quis dui at dolor tempor interdum.</a></h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>

@endsection
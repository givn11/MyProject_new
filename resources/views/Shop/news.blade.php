@extends('shop.layouts.app')

@section('title')
    Новости нашего сайта
@endsection

{{--@section('content')
    @foreach($news as $item)
        <li>{{ $item->title }}</li>
    @endforeach
@endsection--}}

@section('content1')
    <!-- START SMALL-PRODUCT-AREA -->
    <div class="small-product-area carosel-navigation">
        <div class="row">
            <div class="col-md-12">
                <div class="area-title">
                    <h3 class="title-group gfont-1">Bestseller</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-bestseller sidebar">
                <div class="col-xs-12">
                    <!-- Start Single-Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-img" src="{{ asset('shop') }}/img/product/small/1.jpg" alt="Product">
                            </a>
                        </div>
                        <div class="product-description">
                            <h5><a href="#">Various Versions</a></h5>
                            <div class="price-box">
                                <span class="price">$99.00</span>
                                <span class="old-price">$120.00</span>
                            </div>
                            <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                        </div>
                    </div>
                    <!-- End Single-Product -->
                    <!-- Start Single-Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-img" src="{{ asset('shop') }}/img/product/small/2.jpg" alt="Product">
                            </a>
                        </div>
                        <div class="product-description">
                            <h5><a href="#">Established Fact</a></h5>
                            <div class="price-box">
                                <span class="price">$85.00</span>
                                <span class="old-price">$105.00</span>
                            </div>
                            <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                        </div>
                    </div>
                    <!-- End Single-Product -->
                    <!-- Start Single-Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-img" src="{{ asset('shop') }}/img/product/small/3.jpg" alt="Product">
                            </a>
                        </div>
                        <div class="product-description">
                            <h5><a href="#">Trid Palm</a></h5>
                            <div class="price-box">
                                <span class="price">$90.00</span>
                                <span class="old-price">$120.00</span>
                            </div>
                            <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                        </div>
                    </div>
                    <!-- End Single-Product -->
                    <!-- Start Single-Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-img" src="{{ asset('shop') }}/img/product/small/4.jpg" alt="Product">
                            </a>
                        </div>
                        <div class="product-description">
                            <h5><a href="#">Established Fact</a></h5>
                            <div class="price-box">
                                <span class="price">$85.00</span>
                                <span class="old-price">$105.00</span>
                            </div>
                            <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                        </div>
                    </div>
                    <!-- End Single-Product -->
                </div>
                <div class="col-xs-12">
                    <!-- Start Single-Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-img" src="{{ asset('shop') }}/img/product/small/5.jpg" alt="Product">
                            </a>
                        </div>
                        <div class="product-description">
                            <h5><a href="#">Various Versions</a></h5>
                            <div class="price-box">
                                <span class="price">$99.00</span>
                                <span class="old-price">$120.00</span>
                            </div>
                            <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                        </div>
                    </div>
                    <!-- End Single-Product -->
                    <!-- Start Single-Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-img" src="{{ asset('shop') }}/img/product/small/6.jpg" alt="Product">
                            </a>
                        </div>
                        <div class="product-description">
                            <h5><a href="#">Established Fact</a></h5>
                            <div class="price-box">
                                <span class="price">$85.00</span>
                                <span class="old-price">$110.00</span>
                            </div>
                            <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                        </div>
                    </div>
                    <!-- End Single-Product -->
                    <!-- Start Single-Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-img" src="{{ asset('shop') }}/img/product/small/7.jpg" alt="Product">
                            </a>
                        </div>
                        <div class="product-description">
                            <h5><a href="#">Trid Palm</a></h5>
                            <div class="price-box">
                                <span class="price">$90.00</span>
                                <span class="old-price">$120.00</span>
                            </div>
                            <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                        </div>
                    </div>
                    <!-- End Single-Product -->
                    <!-- Start Single-Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-img" src="{{ asset('shop') }}/img/product/small/8.jpg" alt="Product">
                            </a>
                        </div>
                        <div class="product-description">
                            <h5><a href="#">Established Fact</a></h5>
                            <div class="price-box">
                                <span class="price">$85.00</span>
                                <span class="old-price">$105.00</span>
                            </div>
                            <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                        </div>
                    </div>
                    <!-- End Single-Product -->
                </div>
            </div>
        </div>



    </div>
    <!-- END SMALL-PRODUCT-AREA -->
    <!-- START RECENT-POSTS -->
    <div class="shop-blog-area sidebar">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-group border-red gfont-1">RECENT POSTS </h3>
            </div>
        </div>
        <div class="row">
            <div class="active-recent-posts carosel-circle">
                <!-- Start Single-Recent-Posts -->
                <div class="col-xs-12">
                    <div class="single-recent-posts">
                        <div class="recent-posts-photo">
                            <img src="{{ asset('shop') }}/img/posts/1.jpg" alt="Recent Posts">
                        </div>
                        <div class="recent-posts-text">
                            <h5><a href="#" class="recent-posts-title">swimwear for women</a></h5>
                            <span class="recent-posts-date">23/12/2015 | BootExpert Theme</span>
                            <p class="posts-short-brif">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            <a href="#" class="posts-read-more">Read more ...</a>
                        </div>
                    </div>
                </div>
                <!-- End Single-Recent-Posts -->
                <!-- Start Single-Recent-Posts -->
                <div class="col-xs-12">
                    <div class="single-recent-posts">
                        <div class="recent-posts-photo">
                            <img src="{{ asset('shop') }}/img/posts/2.jpg" alt="Recent Posts">
                        </div>
                        <div class="recent-posts-text">
                            <h5><a href="#" class="recent-posts-title">swimwear for women</a></h5>
                            <span class="recent-posts-date">23/12/2015 | BootExpert Theme</span>
                            <p class="posts-short-brif">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            <a href="#" class="posts-read-more">Read more ...</a>
                        </div>
                    </div>
                </div>
                <!-- End Single-Recent-Posts -->
                <!-- Start Single-Recent-Posts -->
                <div class="col-xs-12">
                    <div class="single-recent-posts">
                        <div class="recent-posts-photo">
                            <img src="{{ asset('shop') }}/img/posts/3.jpg" alt="Recent Posts">
                        </div>
                        <div class="recent-posts-text">
                            <h5><a href="#" class="recent-posts-title">swimwear for women</a></h5>
                            <span class="recent-posts-date">23/12/2015 | BootExpert Theme</span>
                            <p class="posts-short-brif">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            <a href="#" class="posts-read-more">Read more ...</a>
                        </div>
                    </div>
                </div>
                <!-- End Single-Recent-Posts -->
                <!-- Start Single-Recent-Posts -->
                <div class="col-xs-12">
                    <div class="single-recent-posts">
                        <div class="recent-posts-photo">
                            <img src="{{ asset('shop') }}/img/posts/4.jpg" alt="Recent Posts">
                        </div>
                        <div class="recent-posts-text">
                            <h5><a href="#" class="recent-posts-title">swimwear for women</a></h5>
                            <span class="recent-posts-date">23/12/2015 | BootExpert Theme</span>
                            <p class="posts-short-brif">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            <a href="#" class="posts-read-more">Read more ...</a>
                        </div>
                    </div>
                </div>
                <!-- End Single-Recent-Posts -->
                <!-- Start Single-Recent-Posts -->
                <div class="col-xs-12">
                    <div class="single-recent-posts">
                        <div class="recent-posts-photo">
                            <img src="{{ asset('shop') }}/img/posts/1.jpg" alt="Recent Posts">
                        </div>
                        <div class="recent-posts-text">
                            <h5><a href="#" class="recent-posts-title">swimwear for women</a></h5>
                            <span class="recent-posts-date">23/12/2015 | BootExpert Theme</span>
                            <p class="posts-short-brif">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            <a href="#" class="posts-read-more">Read more ...</a>
                        </div>
                    </div>
                </div>
                <!-- End Single-Recent-Posts -->
            </div>
        </div>
    </div>
    <!-- END RECENT-POSTS -->

@endsection

@section('content2')
    <div class="contauner">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="product-menu">
                    <div class="product-title">
                        <h3 class="title-group-2 gfont-1">Новости нашего сайта </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        @foreach($news as $item)
            <h1><li style="list-style-type: none">{{ $item->title }}</li></h1>
            <h3><li style="list-style-type: none">{{ $item->text }}</li></h3>
            <hr>
        @endforeach
    </div>
@endsection

@section('brandlogo')
    <!-- START BRAND-LOGO-AREA -->
    <div class="brand-logo-area carosel-navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="area-title">
                        <h3 class="title-group border-red gfont-1">Brand Logo</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-brand-logo">
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="{{ asset('shop') }}/img/brand/1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="{{ asset('shop') }}/img/brand/2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="{{ asset('shop') }}/img/brand/3.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="{{ asset('shop') }}/img/brand/4.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="{{ asset('shop') }}/img/brand/5.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="{{ asset('shop') }}/img/brand/6.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="{{ asset('shop') }}/img/brand/1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="{{ asset('shop') }}/img/brand/2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="{{ asset('shop') }}/img/brand/3.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END BRAND-LOGO-AREA -->
@endsection

{{--
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
--}}
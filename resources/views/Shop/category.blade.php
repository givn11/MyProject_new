@extends('shop.layouts.app')

@section('title')
    Товары категории {{ $category->title }}
@endsection

{{--@section('content')
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Товары категории {{ $category->title }}</h2>
        @forelse ($products as $product)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{ env('URL_IMAGE_PRODUCTS') . $product->thumb }}" alt="" />
                            <h2>{{ $product->price }} руб.</h2>
                            <p>{{ $product->title }}</p>
                            <a href="{{ route('product.add', ['product_id' => $product->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">
                                <h2>{{ $product->price }} руб.</h2>
                                <p>{{ $product->description }}</p>
                                <a href="{{ route('product.add', ['product_id' => $product->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="choose">
                        --}}{{--<ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                        </ul>--}}{{--
                    </div>
                </div>
            </div>
        @empty
            <h1>Товаров не обнаружено</h1>
        @endforelse

    </div>

    {{ $products->render() }}

    <!--features_items-->
@endsection--}}

@section('content1')
    <!-- START HOT-DEALS-AREA -->
    <div class="hot-deals-area carosel-circle">
        <div class="row">
            <div class="col-md-12">
                <div class="area-title">
                    <h3 class="title-group border-red gfont-1">Hot Deals</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-hot-deals">
                <!-- Start Single-hot-deals -->
                <div class="col-xs-12">
                    <div class="single-hot-deals">
                        <div class="hot-deals-photo">
                            <a href="#"><img src="{{ asset('shop') }}/img/hot-deals/1.jpg" alt="Product"></a>
                        </div>
                        <div class="count-down">
                            <div class="timer">
                                <div data-countdown="2017/12/31"></div>
                            </div>
                        </div>
                        <div class="hot-deals-text">
                            <h5><a href="#" class="name-group">Various Versions</a></h5>
                            <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
                            <div class="price-box">
                                <span class="price gfont-2">$99.00</span>
                                <span class="old-price gfont-2">$110.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single-hot-deals -->
                <!-- Start Single-hot-deals -->
                <div class="col-xs-12">
                    <div class="single-hot-deals">
                        <div class="hot-deals-photo">
                            <a href="#"><img src="{{ asset('shop') }}/img/hot-deals/2.jpg" alt="Product"></a>
                        </div>
                        <div class="count-down">
                            <div class="timer">
                                <div data-countdown="2017/06/30"></div>
                            </div>
                        </div>
                        <div class="hot-deals-text">
                            <h5><a href="#" class="name-group">Trid Palm</a></h5>
                            <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
                            <div class="price-box">
                                <span class="price gfont-2">$85.00</span>
                                <span class="old-price gfont-2">$120.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single-hot-deals -->
                <!-- Start Single-hot-deals -->
                <div class="col-xs-12">
                    <div class="single-hot-deals">
                        <div class="hot-deals-photo">
                            <a href="#"><img src="{{ asset('shop') }}/img/hot-deals/3.jpg" alt="Product"></a>
                        </div>
                        <div class="count-down">
                            <div class="timer">
                                <div data-countdown="2017/08/30"></div>
                            </div>
                        </div>
                        <div class="hot-deals-text">
                            <h5><a href="#" class="name-group">Established Fact</a></h5>
                            <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
                            <div class="price-box">
                                <span class="price gfont-2">$90.00</span>
                                <span class="old-price gfont-2">$105.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single-hot-deals -->
            </div>
        </div>
    </div>
    <!-- END HOT-DEALS-AREA -->
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
    <!-- START PRODUCT-AREA (1) -->
    <div class="product-area">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <!-- Start Product-Menu -->
                <div class="product-menu">
                    <div class="product-title">
                        <h3 class="title-group-2 gfont-1">Товары категории {{ $category->title }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product-Menu -->
        <div class="clear"></div>

        <!-- Start Product -->
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="product carosel-navigation">
                    <div class="tab-content">
                        <!-- Product = display-1-1 -->
                        <div role="tabpanel" class="tab-pane fade in active" id="display-1-1">
                            <div class="row">
                                <div class="active-product-carosel">
                                @forelse ($products as $product)
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            {{--<div class="label_new">
                                                <span class="new">new</span>
                                            </div>--}}
                                            {{--<div class="sale-off">
                                                <span class="sale-percent">-55%</span>
                                            </div>--}}
                                            <div class="product-img">
                                                <a href="{{ route('product.add', ['product_id' => $product->id]) }}">
                                                    <img class="primary-img" src="{{ env('URL_IMAGE_PRODUCTS') . $product->thumb }}" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/12bg.gif" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5>{{ $product->title }}</h5>
                                                <div class="price-box">
                                                    <span class="price">{{ $product->price }} руб.</span>
                                                    <span class="old-price">{{ $product->old_price }} руб.</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                            </div>
                                            <div class="product-action">
                                                <div class="button-group">
                                                    <div class="product-button">
                                                        <a href="{{ route('product.add', ['product_id' => $product->id]) }}"
                                                           class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                    <div class="product-button-2">
                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    @empty
                                        <h1>Товаров не обнаружено</h1>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <!-- End Product = display-1-1 -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product -->
    </div>
    {{ $products->render() }}
    <!-- END PRODUCT-AREA (1) -->
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
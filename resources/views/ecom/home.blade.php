@extends('ecom.layouts.main')
@section('content')
    <main class="main">
        <div class="home-slider-container">
            <div class="home-slider owl-carousel owl-theme owl-theme-light">
                <div class="home-slide">
                    <div class="slide-bg owl-lazy" data-src="{{ asset('assets2/assets/images/slider/slide-1.jpg') }}">
                    </div>
                    <!-- End .slide-bg -->
                    <div class="container">
                        <div class="home-slide-content">
                            <div class="slide-border-top">
                                <img src="{{ asset('assets2/assets/images/slider/border-top.png') }}" alt="Border"
                                    width="290" height="38">
                            </div><!-- End .slide-border-top -->
                            <h3>80% off for select items</h3>
                            <h1>fashion mega sale</h1>
                            <a href="category.html" class="btn btn-primary">Shop Now</a>
                            <div class="slide-border-bottom">
                                <img src="{{ asset('assets2/assets/images/slider/border-bottom.png') }}" alt="Border"
                                    width="290" height="111">
                            </div><!-- End .slide-border-bottom -->
                        </div><!-- End .home-slide-content -->
                    </div><!-- End .container -->
                </div><!-- End .home-slide -->

                <div class="home-slide">
                    <div class="slide-bg owl-lazy" data-src="{{ asset('assets2/assets/images/slider/slide-2.jpg') }}">
                    </div>
                    <!-- End .slide-bg -->
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-8 col-md-6 text-center slide-content-right">
                                <div class="home-slide-content">
                                    <h3>up to 70% off</h3>
                                    <h1>Women's Hats</h1>
                                    <a href="category.html" class="btn btn-primary">Shop Now</a>
                                </div><!-- End .home-slide-content -->
                            </div><!-- End .col-lg-5 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .home-slide -->
            </div><!-- End .home-slider -->
        </div><!-- End .home-slider-container -->

        <div class="info-boxes-container">
            <div class="container">
                <div class="info-box">
                    <i class="icon-shipping"></i>

                    <div class="info-box-content">
                        <h4>FREE SHIPPING & RETURN</h4>
                        <p>Free shipping on all orders over $99.</p>
                    </div><!-- End .info-box-content -->
                </div><!-- End .info-box -->

                <div class="info-box">
                    <i class="icon-us-dollar"></i>

                    <div class="info-box-content">
                        <h4>MONEY BACK GUARANTEE</h4>
                        <p>100% money back guarantee</p>
                    </div><!-- End .info-box-content -->
                </div><!-- End .info-box -->

                <div class="info-box">
                    <i class="icon-support"></i>

                    <div class="info-box-content">
                        <h4>ONLINE SUPPORT 24/7</h4>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div><!-- End .info-box-content -->
                </div><!-- End .info-box -->
            </div><!-- End .container -->
        </div><!-- End .info-boxes-container -->

        <div class="banners-group">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="banner banner-image">
                            <a href="#">
                                <img src="{{ asset('assets2/assets/images/banners/banner-1.jpg') }}" alt="banner">
                            </a>
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="banner banner-image">
                            <a href="#">
                                <img src="{{ asset('assets2/assets/images/banners/banner-2.jpg') }}" alt="banner">
                            </a>
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="banner banner-image">
                            <a href="#">
                                <img src="{{ asset('assets2/assets/images/banners/banner-3.jpg') }}" alt="banner">
                            </a>
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .banneers-group -->

        <div class="featured-products-section carousel-section">
            <div class="container">
                <h2 class="h3 title mb-4 text-center">Featured Products</h2>
                <div class="featured-products owl-carousel owl-theme">
                    @foreach ($products as $product)
                        @php
                            $image = explode(',', $product->image);
                        @endphp
                        <div class="product-default">
                            <figure>
                                <a href="{{ url('/') }}/view-products">
                                    <img src="{{ asset('storage') }}/{{ $image[0] }}" alt="product"
                                        class="shadow-sm">
                                </a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">{{ $product->name }}</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">{{ $product->price }}</span>
                                </div><!-- End .price-box -->
                                <div class="product-action">
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart add-to-cart" data-id="{{ $product->id }}"
                                        data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO
                                        CART</button>
                                    <a href="{{ url('/quickview') }}/{{ $product->id }}"
                                        data-id="{{ $product->id }}" class="btn-quickview product-view"
                                        title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                    @endforeach
                </div><!-- End .featured-proucts -->
            </div><!-- End .container -->
        </div><!-- End .featured-proucts-section -->

        <div class="mb-5"></div><!-- margin -->

        <div class="carousel-section">
            <div class="container">
                <h2 class="h3 title mb-4 text-center">New Arrivals</h2>
                <div class="new-products owl-carousel owl-theme">
                    @foreach ($new_arrv as $item)
                        @php
                            $image = explode(',', $item->image);
                        @endphp
                        <div class="product-default">
                            <figure>
                                <a href="product.html">
                                    <img src="{{ asset('storage') }}/{{ $image[0] }}" alt="product">
                                </a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">{{ $item->name }}</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">{{ $item->price }}</span>
                                </div><!-- End .price-box -->
                                <div class="product-action">
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i
                                            class="icon-bag"></i>ADD TO CART</button>
                                    <a href="{{ url('/quickview') }}/{{ $item->id }}" class="btn-quickview"
                                        title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                    @endforeach
                </div><!-- End .news-proucts -->
            </div><!-- End .container -->
        </div><!-- End .carousel-section -->

        <div class="mb-5"></div><!-- margin -->

        <div class="info-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box feature-box-simple text-center">
                            <i class="icon-earphones-alt"></i>

                            <div class="feature-box-content">
                                <h3>Customer Support<span>Need Assistence?</span></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum
                                    magna, et dapib.</p>
                            </div><!-- End .feature-box-content -->
                        </div><!-- End .feature-box -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="feature-box feature-box-simple text-center">
                            <i class="icon-credit-card"></i>

                            <div class="feature-box-content">
                                <h3>secured payment <span>Safe & Fast</span></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum
                                    magna, et dapibus lacus. Lorem ipsum dolor sit amet.consectetur adipiscing elit.
                                </p>
                            </div><!-- End .feature-box-content -->
                        </div><!-- End .feature-box -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="feature-box feature-box-simple text-center">
                            <i class="icon-action-undo"></i>

                            <div class="feature-box-content">
                                <h3>Returns <span>Easy & Free</span></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum
                                    magna, et dapibus lacus.</p>
                            </div><!-- End .feature-box-content -->
                        </div><!-- End .feature-box -->
                    </div><!-- End .col-md-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .info-section -->

        <div class="promo-section" style="background-image: url(assets2/assets/images/promo-bg.jpg)">
            <div class="container">
                <h3>fashion show collection</h3>
                <a href="#" class="btn btn-dark">Shop Now</a>
            </div><!-- End .container -->
        </div><!-- End .promo-section -->

        <div class="partners-container">
            <div class="container">
                <div class="partners-carousel owl-carousel owl-theme">
                    <a href="#" class="partner">
                        <img src="{{ asset('assets2/assets/images/logos/1.png') }}" alt="logo">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{ asset('assets2/assets/images/logos/2.png') }}" alt="logo">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{ asset('assets2/assets/images/logos/3.png') }}" alt="logo">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{ asset('assets2/assets/images/logos/4.png') }}" alt="logo">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{ asset('assets2/assets/images/logos/5.png') }}" alt="logo">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{ asset('assets2/assets/images/logos/2.png') }}" alt="logo">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{ asset('assets2/assets/images/logos/1.png') }}" alt="logo">
                    </a>
                </div><!-- End .partners-carousel -->
            </div><!-- End .container -->
        </div><!-- End .partners-container -->

        <div class="blog-section">
            <div class="container">
                <h2 class="h3 title text-center">From the Blog</h2>

                <div class="blog-carousel owl-carousel owl-theme">
                    <article class="entry">
                        <div class="entry-media">
                            <a href="single.html">
                                <img src="{{ asset('assets2/assets/images/blog/home/post-1.png') }}" alt="Post">
                            </a>
                            <div class="entry-date">29<span>Now</span></div><!-- End .entry-date -->
                        </div><!-- End .entry-media -->

                        <div class="entry-body">
                            <h3 class="entry-title">
                                <a href="single.html">New Collection</a>
                            </h3>
                            <div class="entry-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has...</p>

                                <a href="single.html" class="btn btn-dark">Read More</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    <article class="entry">
                        <div class="entry-media">
                            <a href="single.html">
                                <img src="{{ asset('assets2/assets/images/blog/home/post-2.png') }}" alt="Post">
                            </a>
                            <div class="entry-date">30 <span>Now</span></div><!-- End .entry-date -->
                        </div><!-- End .entry-media -->

                        <div class="entry-body">
                            <h3 class="entry-title">
                                <a href="single.html">Fashion Trends</a>
                            </h3>
                            <div class="entry-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has...</p>

                                <a href="single.html" class="btn btn-dark">Read More</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    <article class="entry">
                        <div class="entry-media">
                            <a href="single.html">
                                <img src="{{ asset('assets2/assets/images/blog/home/post-3.png') }}" alt="Post">
                            </a>
                            <div class="entry-date">28 <span>Now</span></div><!-- End .entry-date -->
                        </div><!-- End .entry-media -->

                        <div class="entry-body">
                            <h3 class="entry-title">
                                <a href="single.html">Women Fashion</a>
                            </h3>
                            <div class="entry-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has...</p>

                                <a href="single.html" class="btn btn-dark">Read More</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                </div><!-- End .blog-carousel -->
            </div><!-- End .container -->
        </div><!-- End .blog-section -->
    </main><!-- End .main -->
@endsection

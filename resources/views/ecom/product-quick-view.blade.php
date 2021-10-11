<div class="product-single-container product-single-default product-quick-view container">
    @if (isset($AllProd))
        <div class="row">
            <div class="col-lg-6 col-md-6 product-single-gallery">
                <div class="product-slider-container product-item">
                    <div class="product-single-carousel owl-carousel owl-theme">
                        @php
                            $image = explode(',', $AllProd->image);
                        @endphp
                        @foreach ($image as $img)
                            <div class="product-item">
                                <img class="product-single-image" src="{{ asset('storage') }}/{{ $img }}"
                                    data-zoom-image="{{ asset('storage') }}/{{ $img }}" />
                            </div>
                        @endforeach
                    </div>
                    <!-- End .product-single-carousel -->
                </div>
                <div class="prod-thumbnail row owl-dots" id='carousel-custom-dots'>
                    @foreach ($image as $img)
                        <div class="col-3 owl-dot">
                            <img src="{{ asset('storage') }}/{{ $img }}" />
                        </div>
                    @endforeach
                </div>
            </div><!-- End .col-lg-7 -->

            <div class="col-lg-6 col-md-6">
                <div class="product-single-details">
                    <h2 class="product-title">{{ $AllProd->name }}</h2>

                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                        </div><!-- End .product-ratings -->

                        <a href="#" class="rating-link">( 6 Reviews )</a>
                    </div><!-- End .product-container -->

                    <div class="price-box">
                        <span class="old-price">{{ $AllProd->mrp }}</span>
                        <span class="product-price prc">{{ $AllProd->price }}</span>
                    </div><!-- End .price-box -->

                    <div class="product-desc">
                        <p>{{ $AllProd->descript }}</p>
                    </div><!-- End .product-desc -->

                    <div class="product-filters-container">
                        <div class="product-single-filter">
                            <label>Colors:</label>
                            @php
                                $colors = explode(',', $AllProd->color);
                            @endphp
                            <ul class="config-swatch-list">
                                @foreach ($colors as $color)
                                    <li class="">
                                        <a href=" #"
                                        style="background-color: {{ $color }}"></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div><!-- End .product-single-filter -->
                    </div><!-- End .product-filters-container -->

                    <div class="product-action">
                        <div class="product-single-qty">
                            <input class="horizontal-quantity form-control" type="text">
                        </div><!-- End .product-single-qty -->

                        <a href="cart.html" class="paction add-cart" title="Add to Cart">
                            <span>Add to Cart</span>
                        </a>
                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                            <span>Add to Wishlist</span>
                        </a>
                        <a href="#" class="paction add-compare" title="Add to Compare">
                            <span>Add to Compare</span>
                        </a>
                    </div><!-- End .product-action -->

                    <div class="product-single-share">
                        <label>Share:</label>
                        <!-- www.addthis.com share plugin-->
                        <div class="addthis_inline_share_toolbox"></div>
                    </div><!-- End .product single-share -->
                </div><!-- End .product-single-details -->
            </div><!-- End .col-lg-5 -->
        </div><!-- End .row -->
    @endif
</div><!-- End .product-single-container -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets2/assets/images/icons/favicon.ico') }}">

    <script type="text/javascript">
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700',
                    'Segoe Script:300,400,500,600,700'
                ]
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'assets2/assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('assets2/assets/css/bootstrap.min.css') }}">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets2/assets/css/style.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets2/assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/assets/css/style.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets2/assets/vendor/fontawesome-free/css/all.min.css') }}">
</head>

<body>
    <div class="page-wrapper">
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left header-dropdowns">
                        <div class="header-dropdown">
                            <a href="#">USD</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropown -->

                        <div class="header-dropdown">
                            <a href="#"><img src="{{ asset('assets2/assets/images/flags/en.png') }}"
                                    alt="England flag">ENGLISH</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#"><img src="{{ asset('assets2/assets/images/flags/en.png') }}"
                                                alt="England flag">ENGLISH</a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('assets2/assets/images/flags/fr.png') }}"
                                                alt="France flag">FRENCH</a>
                                    </li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropown -->

                        <div class="dropdown compare-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-retweet"></i> Compare (2)
                            </a>

                            <div class="dropdown-menu">
                                <div class="dropdownmenu-wrapper">
                                    <ul class="compare-products">
                                        <li class="product">
                                            <a href="#" class="btn-remove" title="Remove Product"><i
                                                    class="icon-cancel"></i></a>
                                            <h4 class="product-title"><a href="product.html">Lady White Top</a></h4>
                                        </li>
                                        <li class="product">
                                            <a href="#" class="btn-remove" title="Remove Product"><i
                                                    class="icon-cancel"></i></a>
                                            <h4 class="product-title"><a href="product.html">Blue Women Shirt</a></h4>
                                        </li>
                                    </ul>

                                    <div class="compare-actions">
                                        <a href="#" class="action-link">Clear All</a>
                                        <a href="#" class="btn btn-primary">Compare</a>
                                    </div>
                                </div><!-- End .dropdownmenu-wrapper -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .dropdown -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        @if (session()->has('customer'))
                            <a href="#" class="welcome-msg">{{ session()->get('customer')->name }}</a>
                        @else
                            <a href="#" class="welcome-msg">Welcome Guest</a>
                        @endif

                        <div class="header-dropdown dropdown-expanded">
                            <a href="#">Links</a>
                            <div class="header-menu">
                                <ul>
                                    @if (session()->has('customer'))
                                        <li>
                                            <a href="my-account.html">MY ACCOUNT </a>
                                        </li>
                                    @endif
                                    <li><a href="#">DAILY DEAL</a></li>
                                    <li><a href="#">MY WISHLIST </a></li>
                                    <li><a href="blog.html">BLOG</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li>
                                        @if (session()->has('customer'))
                                            <a href="customer/logout">LOG OUT</a>
                                        @else
                                            <a href="#" data-toggle="modal" data-target="#customerLogin">LOG IN</a>
                                        @endif
                                    </li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="modal fade" id="customerLogin" tabindex="-1" role="dialog" aria-labelledby="addCartModal"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header shadow">
                            <h2 class="title">Login</h2>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('customer/login') }}" method="POST" class="mb-1">
                                @csrf
                                <label for="login-email">Email address <span class="required">*</span></label>
                                <input type="email" name="email" class="form-input form-wide mb-2" id="login-email" />

                                <label for="login-password">Password <span class="required">*</span></label>
                                <input type="password" name="password" class="form-input form-wide mb-2"
                                    id="login-password" />

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary btn-md">LOGIN</button>
                                    <div class="custom-control custom-checkbox form-footer-right">
                                        <input type="checkbox" class="custom-control-input" id="lost-password">
                                    </div>
                                </div>
                            </form>
                            @if (session()->has('error'))
                                {{ session()->get('error') }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <a href="{{ url('/') }}" class="logo">
                            <img src="{{ asset('storage') }}/{{ viewOption()->logo }}" alt="Porto Logo">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search..."
                                        required>
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">All Categories</option>
                                            <option value="4">Fashion</option>
                                            <option value="12">- Women</option>
                                            <option value="13">- Men</option>
                                            <option value="66">- Jewellery</option>
                                            <option value="67">- Kids Fashion</option>
                                            <option value="5">Electronics</option>
                                            <option value="21">- Smart TVs</option>
                                            <option value="22">- Cameras</option>
                                            <option value="63">- Games</option>
                                            <option value="7">Home &amp; Garden</option>
                                            <option value="11">Motors</option>
                                            <option value="31">- Cars and Trucks</option>
                                            <option value="32">- Motorcycles &amp;
                                                Powersports</option>
                                            <option value="33">- Parts &amp; Accessories
                                            </option>
                                            <option value="34">- Boats</option>
                                            <option value="57">- Auto Tools &amp; Supplies
                                            </option>
                                        </select>
                                    </div><!-- End .select-custom -->
                                    <button class="btn" type="submit"><i class="icon-magnifier"></i></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div><!-- End .headeer-center -->

                    <div class="header-right">
                        <button class="mobile-menu-toggler" type="button">
                            <i class="icon-menu"></i>
                        </button>
                        <div class="header-contact">
                            <span>Call us now</span>
                            <a href="tel:#"><strong>{{ viewOption()->contact }}</strong></a>
                        </div><!-- End .header-contact -->

                        <div class="dropdown cart-dropdown">
                            <a href="{{ url('/view-cart') }}" class="dropdown-toggle" role="button"
                                data-display="static">
                                <span class="cart-count">
                                    @if (session()->has('cart_count'))
                                        {{ session()->get('cart_count') }}
                                    @else
                                        0
                                    @endif
                                </span>
                            </a>

                            <div class="dropdown-menu">
                                <div class="dropdownmenu-wrapper">
                                    @if (count($cartitem))
                                        @php
                                            $price = 0;
                                        @endphp
                                        @foreach ($cartitem as $item)
                                            @php
                                                $image = explode(',', $item->image);
                                                $price += $item->price;
                                            @endphp
                                            <div class="dropdown-cart-products">
                                                <div class="product">
                                                    <div class="product-details">
                                                        <h4 class="product-title">
                                                            <a href="product.html">{{ $item->name }}</a>
                                                        </h4>

                                                        <span class="cart-product-info">
                                                            <span class="cart-product-qty">1</span>
                                                            x {{ $item->price }}
                                                        </span>
                                                    </div>

                                                    <figure class="product-image-container">
                                                        <a href="product.html" class="product-image">
                                                            <img src="{{ asset('storage') }}/{{ $image[0] }}"
                                                                alt="product">
                                                        </a>
                                                        <a href="#" title="Remove product"
                                                            class="btn-remove remove-to-cart"
                                                            data-id="{{ $item->id }}"><i
                                                                class="icon-cancel"></i></a>
                                                    </figure>
                                                </div>

                                            </div>
                                        @endforeach
                                        <div class="dropdown-cart-total">
                                            <span>Total</span>
                                            <span class="cart-total-price">{{ $price }}</span>
                                        </div>
                                    @else
                                        No Products Available !
                                    @endif
                                    <div class="dropdown-cart-action">
                                        <a href="{{ url('/view-cart') }}" class="btn">View
                                            Cart</a>
                                        <a href="checkout-shipping.html" class="btn">Checkout</a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdownmenu-wrapper -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li class="active"><a href="index.html">Home</a></li>
                            <li>
                                <a href="category.html" class="sf-with-ul">Categories</a>
                            </li>
                            <li class="megamenu-container">
                                <a href="product.html" class="sf-with-ul">Products</a>
                            </li>
                            <li>
                                <a href="#" class="sf-with-ul">Pages</a>
                            </li>
                            <li>
                                <a href="#" class="sf-with-ul">Features</a>
                            </li>
                            <li class="float-right"><a href="#">Special Offer!</a></li>
                        </ul>
                    </nav>
                </div><!-- End .header-bottom -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->

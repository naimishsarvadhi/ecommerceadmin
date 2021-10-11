<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-md-9">
                    <div class="widget widget-newsletter">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4 class="widget-title">Subscribe newsletter</h4>
                                <p>Get all the latest information on Events,Sales and Offers. Sign up for
                                    newsletter today</p>
                            </div><!-- End .col-lg-6 -->

                            <div class="col-lg-6">
                                <form action="#">
                                    <input type="email" class="form-control" placeholder="Email address" required>

                                    <input type="submit" class="btn" value="Subscribe">
                                </form>
                            </div><!-- End .col-lg-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .widget -->
                </div><!-- End .col-md-9 -->

                <div class="col-md-3 widget-social">
                    <div class="social-icons">
                        <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                        <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                        <a href="#" class="social-icon" target="_blank"><i class="icon-linkedin"></i></a>
                    </div><!-- End .social-icons -->
                </div><!-- End .col-md-3 -->
            </div><!-- End .row -->
        </div><!-- End .footer-top -->
    </div><!-- End .container -->

    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">Contact Us</h4>
                        <ul class="contact-info">
                            <li>
                                <span class="contact-info-label">Address:</span>{{ viewOption()->address }}
                            </li>
                            <li>
                                <span class="contact-info-label">Phone:</span>Toll Free <a
                                    href="tel:">{{ viewOption()->contact }}</a>
                            </li>
                            <li>
                                <span class="contact-info-label">Email:</span> <a
                                    href="mailto:mail@example.com">{{ viewOption()->email }}</a>
                            </li>
                        </ul>
                    </div><!-- End .widget -->
                </div><!-- End .col-lg-3 -->

                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4>

                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <ul class="links">
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                        </ul>
                                    </div><!-- End .col-sm-6 -->
                                    <div class="col-sm-6 col-md-5">
                                        <ul class="links">
                                            <li><a href="#">Orders History</a></li>
                                            <li><a href="#">Advanced Search</a></li>
                                            <li><a href="#" class="login-link">Login</a></li>
                                        </ul>
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-md-5 -->

                        <div class="col-md-7">
                            <div class="widget">
                                <h4 class="widget-title">Main Features</h4>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="links">
                                            <li><a href="#">Super Fast Magento Theme</a></li>
                                            <li><a href="#">1st Fully working Ajax Theme</a></li>
                                            <li><a href="#">20 Unique Homepage Layouts</a></li>
                                        </ul>
                                    </div><!-- End .col-sm-6 -->
                                    <div class="col-sm-6">
                                        <ul class="links">
                                            <li><a href="#">Powerful Admin Panel</a></li>
                                            <li><a href="#">Mobile & Retina Optimized</a></li>
                                        </ul>
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-md-7 -->
                    </div><!-- End .row -->

                    <div class="footer-bottom">
                        <p class="footer-copyright">{{ viewOption()->footertxt }}</p>

                        <ul class="contact-info">
                            <li>
                                <span class="contact-info-label">Working Days/Hours:</span>
                                Mon - Sun / 9:00AM - 8:00PM
                            </li>
                        </ul>
                        <img src="{{ asset('assets2/assets/images/payments.png') }}" alt="payment methods"
                            class="footer-payments">
                    </div><!-- End .footer-bottom -->
                </div><!-- End .col-lg-9 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .footer-middle -->
</footer><!-- End .footer -->
</div><!-- End .page-wrapper -->

<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li class="active"><a href="index.html">Home</a></li>
                <li>
                    <a href="category.html">Categories</a>
                    <ul>
                        <li><a href="category.html">Full Width Banner</a></li>
                        <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                        <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                        <li><a href="category.html">Left Sidebar</a></li>
                        <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                        <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                        <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                        <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                        <li><a href="#">Product List Item Types</a></li>
                        <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span
                                    class="tip tip-new">New</span></a></li>
                        <li><a href="category.html">3 Columns Products</a></li>
                        <li><a href="category-4col.html">4 Columns Products</a></li>
                        <li><a href="category-5col.html">5 Columns Products</a></li>
                        <li><a href="category-6col.html">6 Columns Products</a></li>
                        <li><a href="category-7col.html">7 Columns Products</a></li>
                        <li><a href="category-8col.html">8 Columns Products</a></li>
                    </ul>
                </li>
                <li>
                    <a href="product.html">Products</a>
                    <ul>
                        <li>
                            <a href="#">Variations</a>
                            <ul>
                                <li><a href="product.html">Horizontal Thumbnails</a></li>
                                <li><a href="product-full-width.html">Vertical Thumbnails<span
                                            class="tip tip-hot">Hot!</span></a></li>
                                <li><a href="product.html">Inner Zoom</a></li>
                                <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Variations</a>
                            <ul>
                                <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                <li><a href="product-simple.html">Simple Product</a></li>
                                <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Product Layout Types</a>
                            <ul>
                                <li><a href="product.html">Default Layout</a></li>
                                <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                <li><a href="product-full-width.html">Full Width Layout</a></li>
                                <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                <li><a href="product-sticky-both.html">Sticky Both Side Info<span
                                            class="tip tip-hot">Hot!</span></a></li>
                                <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                    <ul>
                        <li><a href="cart.html">Shopping Cart</a></li>
                        <li>
                            <a href="#">Checkout</a>
                            <ul>
                                <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                <li><a href="checkout-review.html">Checkout Review</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="#" class="login-link">Login</a></li>
                        <li><a href="forgot-password.html">Forgot Password</a></li>
                    </ul>
                </li>
                <li><a href="blog.html">Blog</a>
                    <ul>
                        <li><a href="single.html">Blog Post</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="#">Special Offer!<span class="tip tip-hot">Hot!</span></a></li>
                <li><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
            </ul>
        </nav><!-- End .mobile-nav -->

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
            <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

{{-- <div class="newsletter-popup mfp-hide" id="newsletter-popup-form"
    style="background-image: url(assets/images/newsletter_popup_bg.jpg)">
    <div class="newsletter-popup-content">
        <img src="assets/images/logo-black.png" alt="Logo" class="logo-newsletter">
        <h2>BE THE FIRST TO KNOW</h2>
        <p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>
        <form action="#">
            <div class="input-group">
                <input type="email" class="form-control" id="newsletter-email" name="newsletter-email"
                    placeholder="Email address" required>
                <input type="submit" class="btn" value="Go!">
            </div><!-- End .from-group -->
        </form>
        <div class="newsletter-subscribe">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="1">
                    Don't show this popup again
                </label>
            </div>
        </div>
    </div><!-- End .newsletter-popup-content -->
</div><!-- End .newsletter-popup --> --}}

<!-- Add Cart Modal -->
<div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body add-cart-box text-center">
                <p>You've just added this product to the<br>cart:</p>
                <h4 id="productTitle"></h4>
                <img src="" id="productImage" width="100" height="100" alt="adding cart image">
                <div class="btn-actions">
                    <a href="cart.html"><button class="btn-primary">Go to cart page</button></a>
                    <a href="" class="continue"><button class="btn-primary">Continue</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<a id="scroll-top" href="#top" role="button"><i class="icon-angle-up"></i></a>

<!-- Plugins JS File -->
<script src="{{ asset('assets2/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets2/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets2/assets/js/plugins.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('assets2/assets/js/main.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var sum = 0;
        $('.product-view').click(function(e) {
            e.preventDefault();
            console.log($('.old-price'));
            $('.product-price .prc').html('100');
            // $('.review').empty();
            // $('.demo').attr('value', '1');
            // $('.color').empty();
            // $('.storage').empty();
            // var prod_id = $(this).data('id');
            // $.ajax({
            //     url: "/getSingleProduct",
            //     type: 'POST',
            //     data: {
            //         prod_id: prod_id,
            //         _token: "{{ csrf_token() }}"
            //     },
            //     success: function(data) {
            //         //console.log(data);
            //         var img = data.image.split(',');
            //         var clr = data.color.split(',');
            //         var rom = data.storage.split(',');
            //         console.log(clr);
            //         for (var i = 0; i < img.length; i++) {
            //             $('.review').append(
            //                 '<a href="javascript:;"><img src="' +
            //                 "{{ asset('storage') }}/" + img[i] +
            //                 '" class="imgs one_img"></a>'
            //             );
            //             $('.product-img').attr('src', "{{ asset('storage') }}/" + img[
            //                 0]);
            //         }
            //         for (var i = 0; i < clr.length; i++) {
            //             $('.color').append('<option>' + clr[i] + '</option>');
            //         }
            //         for (var i = 0; i < rom.length; i++) {
            //             $('.storage').append('<option>' + rom[i] + '</option>');
            //         }
            //         $('#product-name').html(data.name);
            //         $('#product-price').html('$' + data.price);
            //         if (data.discount == null) {
            //             data.discount = 0;
            //             $('.product-sale').hide();
            //         } else {
            //             data.discount
            //             $('.product-sale').show();
            //         }
            //         $('#product-discount').html('$' + data.discount);
            //         if (data.quantity > 0) {
            //             data.quantity1 = "In Stock";
            //             $('.demo').attr('max', data.quantity);
            //         } else {
            //             data.quantity1 = "Out Of Stock";
            //         }
            //         $('#product-quantity').html(data.quantity1);
            //         $('#product-descript').html(data.descript);
            //     }
            // });
        });

        $("body").on('click', '.review a img', function() {
            var src = $(this).attr('src');
            $('.product-img').attr('src', src);
        });

        $('.add-to-cart').click(function() {
            var prod_id = $(this).attr('data-id');
            $.ajax({
                url: "/add-to-cart",
                type: "POST",
                data: {
                    prod_id: prod_id,
                    _token: "{{ csrf_token() }}"
                },
                success: function(responce) {
                    if (responce == true) {
                        console.log('yes', responce);
                        //location.reload();
                    } else {
                        console.log('no.ajax', responce);
                    }
                }
            })
        });

        $('.cart-quantity').change(function() {
            var qty_val = $(this).val();
            var pd_price = $(this).attr('data-price');
            const sub = qty_val * pd_price;
            var pr = $(this).parents().parents();
            var nx = pr.next();
            const pr_sub = nx[0];
            $(pr_sub).html(sub.toLocaleString());
            total();
        });
        total();

        function total() {
            var abc = $('.tds');
            sum = 0;
            if (abc.length) {
                abc.each(function(item) {
                    var child = $(abc[item]).children();
                    var ls = child.last();
                    sum += parseInt(ls.html().replace(/\,/g, ''));
                });
                $('.subtotal').html(sum.toLocaleString());
                tax();
                OrderTotal();
            }
        }

        function OrderTotal() {
            var subtotal = $('.subtotal').html();
            var tax = $('.tax').html();
            var orderTotal = parseInt(subtotal.replace(/\,/g, '')) + parseInt(tax.replace(/\,/g, ''));
            $('.order-total').html(orderTotal.toLocaleString());
        }

        function tax() {
            var subtotal = $('.subtotal').html();
            //console.log(subtotal);
            var taxPercent = (subtotal.replace(/\,/g, '') * 2.5) / 100;
            $('.tax').html(taxPercent.toLocaleString());
        }

        $('body').on('click', '.remove-to-cart', function() {
            var prod_id = $(this).attr('data-id');
            $.ajax({
                url: "/remove-to-cart",
                type: "POST",
                data: {
                    prod_id: prod_id,
                    _token: "{{ csrf_token() }}"
                },
                success: function(responce) {
                    if (responce == true) {
                        location.reload();
                    }
                }
            })
        })

        // $('.shop-currencies a').click(function(e) {
        //     e.preventDefault();
        //     $('.shop-currencies a.current').removeClass('current');
        //     $(this).addClass('current');
        //     var cur = $('.current').attr('data-id');
        //     alert(cur);
        //     $.ajax({
        //         url: "/getcurrency",
        //         type: 'POST',
        //         data: {
        //             cur_id: cur,
        //             _token: "{{ csrf_token() }}"
        //         },
        //         success: function(data) {
        //             // var crnt_pr = $('.demo-price');
        //             // //alert(crnt_pr);
        //             // crnt_pr.each(function(i, e) {
        //             //     $(e).html(data.symbol + " " + parseInt($(e).data('price')) *
        //             //         data.exchange_rate)
        //             // })
        //             // $('.demo-price').html(data.symbol + " " + (crnt_pr / data.exchange_rate)
        //             //     .toFixed(2));
        //             // console.log((crnt_pr, data.exchange_rate));
        //         }
        //     })
        // });
    });
</script>
</body>

</html>

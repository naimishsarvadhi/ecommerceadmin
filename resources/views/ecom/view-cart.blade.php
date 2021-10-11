@extends('ecom.layouts.main')
@section('content')

    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                </ol>
            </div><!-- End .container -->
        </nav>

        <div class="container">
            <div class="row">
                @if (count($cartitem))
                    <div class="col-lg-8">
                        <div class="cart-table-container">
                            <table class="table table-cart">
                                <thead>
                                    <tr>
                                        <th class="product-col">Product</th>
                                        <th class="price-col">Price</th>
                                        <th class="qty-col">Qty</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartitem as $item)
                                        @php
                                            $image = explode(',', $item->image);
                                        @endphp
                                        <tr class="product-row tds">
                                            <td class="product-col">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="{{ asset('storage') }}/{{ $image[0] }}"
                                                            alt="product">
                                                    </a>
                                                </figure>
                                                <h2 class="product-title">
                                                    <a href="product.html">{{ $item->name }}</a>
                                                </h2>
                                            </td>
                                            <td class="pd_price">{{ $item->price }}</td>
                                            <td>
                                                <input class="vertical-quantity form-control cart-quantity" type="text"
                                                    data-price="{{ $item->price }}">
                                            </td>
                                            <td class="sub_total">{{ $item->price }}</td>
                                        </tr>
                                        <tr class="product-action-row">
                                            <td colspan="4" class="clearfix">
                                                <div class="float-left">
                                                    <a href="#" class="btn-move">Move to Wishlist</a>
                                                </div><!-- End .float-left -->

                                                <div class="float-right">
                                                    <a href="#" title="Edit product" class="btn-edit"><span
                                                            class="sr-only">Edit</span><i
                                                            class="icon-pencil"></i></a>
                                                    <a href="#" title="Remove product" class="btn-remove remove-to-cart"
                                                        data-id="{{ $item->id }}"><span
                                                            class="sr-only">Remove</span></a>
                                                </div><!-- End .float-right -->
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td colspan="4" class="clearfix">
                                            <div class="float-left">
                                                <a href="{{ url('/') }}" class="btn btn-outline-secondary">Continue
                                                    Shopping</a>
                                            </div><!-- End .float-left -->

                                            <div class="float-right">
                                                <a href="{{ url('/clear-cart') }}"
                                                    class="btn btn-outline-secondary btn-clear-cart">Clear Shopping
                                                    Cart</a>
                                                <a href="#" class="btn btn-outline-secondary btn-update-cart">Update
                                                    Shopping
                                                    Cart</a>
                                            </div><!-- End .float-right -->
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div><!-- End .cart-table-container -->

                        <div class="cart-discount">
                            <h4>Apply Discount Code</h4>
                            <form action="#">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="Enter discount code" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-sm btn-primary" type="submit">Apply Discount</button>
                                    </div>
                                </div><!-- End .input-group -->
                            </form>
                        </div><!-- End .cart-discount -->
                    </div>

                    <div class="col-lg-4">
                        <div class="cart-summary">
                            <h3>Summary</h3>

                            <h4>
                                <a data-toggle="collapse" href="#total-estimate-section" class="collapsed"
                                    role="button" aria-expanded="false" aria-controls="total-estimate-section">Estimate
                                    Shipping and Tax</a>
                            </h4>

                            {{-- <div class="collapse" id="total-estimate-section">
                                <form action="#">
                                    <div class="form-group form-group-sm">
                                        <label>Country</label>
                                        <div class="select-custom">
                                            <select class="form-control form-control-sm">
                                                <option value="USA">United States</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="China">China</option>
                                                <option value="Germany">Germany</option>
                                            </select>
                                        </div><!-- End .select-custom -->
                                    </div><!-- End .form-group -->

                                    <div class="form-group form-group-sm">
                                        <label>State/Province</label>
                                        <div class="select-custom">
                                            <select class="form-control form-control-sm">
                                                <option value="CA">California</option>
                                                <option value="TX">Texas</option>
                                            </select>
                                        </div><!-- End .select-custom -->
                                    </div><!-- End .form-group -->

                                    <div class="form-group form-group-sm">
                                        <label>Zip/Postal Code</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div><!-- End .form-group -->

                                    <div class="form-group form-group-custom-control">
                                        <label>Flat Way</label>
                                        <div class="custom-control custom-checkbox">
                                            <input type="radio" name="delivary" class="custom-control-input" id="flat-rate">
                                            <label class="custom-control-label" for="flat-rate">Fixed 40.00</label>
                                        </div><!-- End .custom-checkbox -->
                                    </div><!-- End .form-group -->

                                    <div class="form-group form-group-custom-control">
                                        <label>Best Rate</label>
                                        <div class="custom-control custom-checkbox">
                                            <input type="radio" name="delivary" class="custom-control-input" id="best-rate">
                                            <label class="custom-control-label" for="best-rate">Table Rate 80.00</label>
                                        </div><!-- End .custom-checkbox -->
                                    </div><!-- End .form-group -->
                                </form>
                            </div> --}}

                            <table class="table table-totals">
                                <tbody>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td class="subtotal"></td>
                                    </tr>

                                    <tr>
                                        <td>Tax</td>
                                        <td class="tax">0</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>Order Total</td>
                                        <td class="order-total"></td>
                                    </tr>
                                </tfoot>
                            </table>

                            <div class="checkout-methods">
                                <a href="checkout-shipping.html" class="btn btn-block btn-sm btn-primary">Go to Checkout</a>
                                <a href="#" class="btn btn-link btn-block">Check Out with Multiple Addresses</a>
                            </div><!-- End .checkout-methods -->
                        </div><!-- End .cart-summary -->
                    </div>
                @else
                    <div class="col-lg-12 justify-content-center">
                        <div class="text-center">
                            <div class="w-100 d-flex justify-content-center">
                                <img src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/v2/assets/empty.svg"
                                    alt="No results found">
                            </div>
                            <p class="mt-2">No results found</p>
                            <hr>
                            <a href="#" data-toggle="modal" data-target="#customerLogin">
                                <button class="btn btn-primary">Login</button>
                            </a>
                        </div>
                        <div class="text-center mt-2">
                            <a href="{{ url('/') }}">Continue Shopping</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <div class="mb-6"></div><!-- margin -->
    </main>

@endsection

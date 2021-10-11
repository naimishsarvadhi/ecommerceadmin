<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/plugins/images/favicon.png') }}">
    <title>Sarvadhi Admin</title>
    <link href="{{ asset('assets/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css') }}"
        rel="stylesheet">
    {{-- <link href="{{ asset('assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/plugins/bower_components/toast-master/css/jquery.toast.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/colors/default.css') }}" id="theme" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bower_components/datatables/jquery.dataTables.min.css') }}" rel="stylesheet"
        type="text/css" />
</head>

<body>
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)"
                    data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="{{ url('admin/dashboard') }}"><b>
                            <img src="{{ asset('assets/plugins/images/eliteadmin-logo.png') }}" alt="home"
                                class="dark-logo" />
                            <img src="{{ asset('assets/plugins/images/logo 2.png') }}" alt="home"
                                class="light-logo" />
                        </b><span class="hidden-xs">
                            <img src="{{ asset('assets/plugins/images/eliteadmin-text.png') }}" alt="home"
                                class="dark-logo" />
                            <img src="{{ asset('assets/plugins/images/sarvadhi.png') }}" alt="home"
                                class="light-logo" />
                        </span></a>
                </div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i
                                class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light"
                            data-toggle="dropdown" href="#"><i class="ti-trash"></i>
                            <div class="notify"><span class="heartbit"></span><span
                                    class="point"></span></div>
                        </a>
                        <ul class="dropdown-menu dropdown-cart dropdown-tasks animated slideInUp">
                            @if (count(viewTrash()) > 0)
                                @foreach (viewTrash() as $item)
                                    @php
                                        $dd = explode(',', $item->image);
                                    @endphp
                                    <li>
                                        <div class="cart-img"><img
                                                src="{{ asset('storage') }}/{{ $dd[0] }}" /></div>
                                        <div class="cart-content">
                                            <h5>{{ $item->name }}</h5><small>${{ $item->price }} | @if ($item->status == 0)
                                                    <span class="label label-danger">Deactive</span>
                                                @endif</small>
                                        </div>
                                    </li>
                                    <li class="divider"></li>
                                @endforeach
                            @else
                                <li>
                                    <div class="cart-content">
                                        <h5>No Products Available</h5>
                                    </div>
                                </li>
                                <li class="divider"></li>
                            @endif
                            <li>
                                <a class="text-center" href="{{ url('admin/products') }}/deactive">
                                    <strong>View All Products</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light"
                            data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
                            <div class="notify"><span class="heartbit"></span><span
                                    class="point"></span></div>
                        </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="">
                                        <div class="user-img"> <img
                                                src="{{ asset('assets/plugins/images/users/pawandeep.jpg') }}"
                                                alt="user" class="img-circle"> <span
                                                class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span> <span
                                                class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="user-img"> <img
                                                src="{{ asset('assets/plugins/images/users/sonu.jpg') }}" alt="user"
                                                class="img-circle"> <span
                                                class="profile-status busy pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5>
                                            <span class="mail-desc">I've sung a song! See you at</span>
                                            <span class="time">9:10 AM</span>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="user-img"> <img
                                                src="{{ asset('assets/plugins/images/users/arijit.jpg') }}"
                                                alt="user" class="img-circle"> <span
                                                class="profile-status away pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5>
                                            <span class="mail-desc">I am a singer!</span> <span
                                                class="time">9:08
                                                AM</span>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="user-img"> <img
                                                src="{{ asset('assets/plugins/images/users/pawandeep.jpg') }}"
                                                alt="user" class="img-circle"> <span
                                                class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span> <span
                                                class="time">9:02 AM</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all
                                        notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light"
                            data-toggle="dropdown" href="#"><i class="ti-shopping-cart"></i>
                            <div class="notify"><span class="heartbit"></span><span
                                    class="point"></span></div>
                        </a>
                        <ul class="dropdown-menu dropdown-cart dropdown-tasks animated slideInUp">
                            <li>
                                <div class="cart-img"><img
                                        src="{{ asset('assets/plugins/images/chair.jpg') }}" /></div>
                                <div class="cart-content">
                                    <h5>Rounded Chair</h5><small>$153</small>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="cart-img"><img
                                        src="{{ asset('assets/plugins/images/chair2.jpg') }}" /></div>
                                <div class="cart-content">
                                    <h5>Rounded Chair</h5><small>$153</small>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="cart-img"><img
                                        src="{{ asset('assets/plugins/images/chair3.jpg') }}" /></div>
                                <div class="cart-content">
                                    <h5>Rounded Chair</h5><small>$153</small>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="deactive product">
                                    <strong>Checkout</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i
                                class="ti-settings"></i></a></li> --}}
                </ul>
            </div>
        </nav>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div><img src="{{ asset('assets/plugins/images/users/varun.jpg') }}" alt="user-img"
                                class="img-circle"></div>
                        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}<span
                                class="caret"></span></a>
                        <ul class="dropdown-menu animated flipInY">
                            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ url('admin/logout') }}"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"> <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="hide-menu t-earning">
                            <div id="sparkline2dash" class="m-b-10"></div><small class="db">TOTAL
                                EARNINGS - JUNE
                                2017</small>
                            <h3 class="m-t-0 m-b-0">$2,478.00</h3>
                        </div>
                    </li>
                    <li class="nav-small-cap m-t-10">--- Main Menu</li>
                    <li> <a href="index.html" class="waves-effect active"><i class="linea-icon linea-basic fa-fw"
                                data-icon="v"></i> <span class="hide-menu"> E-commerce <span
                                    class="fa arrow"></span>
                                <span class="label label-rouded label-custom pull-right">7</span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="{{ url('admin/dashboard') }}">Dashboard</a> </li>
                            <li> <a href="{{ url('admin/products') }}">Products</a> </li>
                            <li> <a href="{{ url('admin/category') }}">Category</a> </li>
                            <!-- <li> <a href="product-detail.html">Product Detail</a> </li> -->
                            <li> <a href="{{ url('admin/subcategory') }}">Sub Category</a> </li>
                            <li> <a href="{{ url('admin/brands') }}">Product Brands</a> </li>
                            <li> <a href="{{ url('admin/orders') }}">Product Orders</a> </li>
                            {{-- <li> <a href="product-checkout.html">Product Checkout</a> </li> --}}
                            <li> <a href="{{ url('admin/option') }}">Options</a> </li>
                        </ul>
                    </li>
                    <li><a href="{{ url('admin/logout') }}" class="waves-effect"><i
                                class="icon-logout fa-fw"></i>
                            <span class="hide-menu">Log out</span></a></li>
                </ul>
            </div>
        </div>

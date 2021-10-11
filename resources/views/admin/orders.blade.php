@extends('admin/layouts/main')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Product Order List</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a
                        href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820"
                        target="_blank"
                        class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy
                        Now</a>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                        <li class="active">Product Order List</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <div class="table-responsive">
                            <table class="table product-overview" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Customer</th>
                                        <th>Order ID</th>
                                        <th>Photo</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Steave Jobs</td>
                                        <td>#85457898</td>
                                        <td> <img src="{{ asset('assets/plugins/images/chair.jpg') }}" alt="iMac"
                                                width="80"> </td>
                                        <td>Rounded Chair</td>
                                        <td>20</td>
                                        <td>10-7-2017</td>
                                        <td> <span class="label label-success font-weight-100">Paid</span> </td>
                                        <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip"
                                                title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)"
                                                class="text-inverse" title="Delete" data-toggle="tooltip"><i
                                                    class="ti-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Varun Dhavan</td>
                                        <td>#95457898</td>
                                        <td> <img src="{{ asset('assets/plugins/images/chair2.jpg') }}" alt="iPhone"
                                                width="80"> </td>
                                        <td>Wooden Chair</td>
                                        <td>25</td>
                                        <td>09-7-2017</td>
                                        <td> <span class="label label-warning font-weight-100">Pending</span> </td>
                                        <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip"
                                                title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)"
                                                class="text-inverse" title="Delete" data-toggle="tooltip"><i
                                                    class="ti-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Hrithik</td>
                                        <td>#45457898</td>
                                        <td> <img src="{{ asset('assets/plugins/images/chair4.jpg') }}" alt="mac_mouse"
                                                width="80"> </td>
                                        <td>Pure Wooden chair</td>
                                        <td>18</td>
                                        <td>02-7-2017</td>
                                        <td> <span class="label label-default font-weight-100">Failed</span> </td>
                                        <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip"
                                                title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)"
                                                class="text-inverse" title="Delete" data-toggle="tooltip"><i
                                                    class="ti-trash"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

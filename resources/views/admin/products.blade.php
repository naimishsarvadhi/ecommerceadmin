@extends('admin/layouts/main')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">{{ $heading }}</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    @if (!isset($viewtrashProd))
                        <a href="{{ url('admin/add-products') }}"
                            class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Add
                            Product</a>
                    @endif
                    <ol class="breadcrumb">
                        <li><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                        <li class="active">{{ $heading }}</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                @if (isset($viewtrashProd))
                    @foreach ($viewtrashProd as $allItem)
                        @php
                            $dd = explode(',', $allItem->image);
                        @endphp
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="white-box">
                                <div class="product-img">
                                    <img src="{{ asset('storage') }}/{{ $dd[0] }}" />
                                    <div class="pro-img-overlay">
                                        <a href="{{ url('admin/edit-products/edit') }}/{{ $allItem->id }}"
                                            class="bg-info"><i class="ti-marker-alt"></i></a>
                                        @if (isset($viewtrashProd))
                                            <a href="{{ url('admin/restore-products/restore') }}/{{ $allItem->id }}"
                                                class="bg-danger"><i class="ti-share-alt"></i></a>
                                        @else
                                            <a href="{{ url('admin/delete-products/delete') }}/{{ $allItem->id }}"
                                                class="bg-danger"><i class="ti-trash"></i></a>
                                        @endif
                                    </div>
                                </div>
                                <div class="product-text">
                                    <span class="pro-price bg-info">${{ $allItem->price }}</span>
                                    <h3 class="box-title m-b-0">{{ $allItem->name }}</h3>
                                    <small class="text-muted db">{{ $allItem->sub_heading }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    @foreach ($AllProd as $allItem)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="white-box">
                                <div class="product-img">
                                    @php
                                        $dd = explode(',', $allItem->image);
                                    @endphp
                                    <img src="{{ asset('storage') }}/{{ $dd[0] }}" />
                                    <div class="pro-img-overlay"><a
                                            href="{{ url('admin/edit-products/edit') }}/{{ $allItem->id }}"
                                            class="bg-info"><i class="ti-marker-alt"></i></a> <a
                                            href="{{ url('admin/delete-products/delete') }}/{{ $allItem->id }}"
                                            class="bg-danger"><i class="ti-trash"></i></a>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <span class="pro-price bg-info">${{ $allItem->price }}</span>
                                    <h3 class="box-title m-b-0">{{ $allItem->name }}</h3>
                                    <small class="text-muted db">{{ $allItem->sub_heading }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            {{ $AllProd->links() }}
        </div>
    </div>
@endsection

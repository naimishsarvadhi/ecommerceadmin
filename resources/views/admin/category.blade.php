@extends('admin/layouts/main')

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Add Category</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href=""
                        class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light"
                        data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add
                        Category</a>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                        <li class="active">Category</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading"> Add Category</div>
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <form action="#">
                                    <div class="form-body">
                                        <h3 class="box-title">About Category</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4># Active Categories</h4>
                                                <div class="white-box">
                                                    <div class="table-responsive">
                                                        <table class="table color-table primary-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>No.</th>
                                                                    <th>Name</th>
                                                                    <th>Status</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php $no = 1; @endphp
                                                                @foreach ($cats as $cat)
                                                                    <tr>
                                                                        <td>{{ $no++ }}</td>
                                                                        <td>{{ $cat->name }}</td>
                                                                        <td><span
                                                                                class="label label-success font-weight-100">{{ $cat->status == 0 ? 'Deactive' : 'active' }}</span>
                                                                        </td>
                                                                        <td>
                                                                            <a href="{{ url('admin/delete-category/delete') }}/{{ $cat->id }}"
                                                                                title="Delete" data-toggle="tooltip"><i
                                                                                    class="ti-trash"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            @if (count($unact_cats) > 0)
                                                <div class="col-sm-12">
                                                    <h4># Unactive Categories</h4>
                                                    <div class="white-box">
                                                        <div class="table-responsive">
                                                            <table class="table color-table primary-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No.</th>
                                                                        <th>Name</th>
                                                                        <th>Status</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @php $no = 1; @endphp
                                                                    @foreach ($unact_cats as $unact_cat)
                                                                        <tr>
                                                                            <td>{{ $no++ }}</td>
                                                                            <td>{{ $unact_cat->name }}</td>
                                                                            <td><span
                                                                                    class="label label-danger font-weight-100">{{ $unact_cat->status == 0 ? 'Deactive' : 'active' }}</span>
                                                                            </td>
                                                                            <td>
                                                                                <a href="{{ url('admin/restore-category/restore') }}/{{ $unact_cat->id }}"
                                                                                    title="Restore" data-toggle="tooltip"><i
                                                                                        class="ti-share-alt"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--row -->
            <!--modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel1">New Category</h4>
                        </div>
                        <form action="{{ url('admin/category') }}/add" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Category Name:</label>
                                    <input type="text" class="form-control" id="recipient-name1" name="name">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

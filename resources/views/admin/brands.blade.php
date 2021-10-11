@extends('admin/layouts/main')
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Add Brands</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href=""
                        class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light"
                        data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Product Brands</a>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                        <li class="active">Product Brands</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading"> Add Product Brands</div>
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <form action="#">
                                    <div class="form-body">
                                        <h3 class="box-title">Add Product Brands</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="white-box">
                                                    <div class="table-responsive">
                                                        <table class="table color-table primary-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Brands Name</th>
                                                                    <th>Category</th>
                                                                    <th>Sub Category</th>
                                                                    <th>Status</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($brnds as $brnd)
                                                                    <tr>
                                                                        <td>{{ $brnd->id }}</td>
                                                                        <td>{{ $brnd->name }}</td>
                                                                        <td>{{ $brnd->categories->name }}</td>
                                                                        <td>{{ $brnd->subcategories->name }}</td>
                                                                        <td><span
                                                                                class="label label-success font-weight-100">{{ $brnd->status == 1 ? 'Active' : 'Deactive' }}</span>
                                                                        </td>
                                                                        <td>
                                                                            <a href="{{ url('admin/delete-brand/delete') }}/{{ $brnd->id }}"
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
                                            @if (count($Unactbrnds) > 0)
                                                <div class="col-sm-12">
                                                    <div class="white-box">
                                                        <div class="table-responsive">
                                                            <table class="table color-table primary-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Brands Name</th>
                                                                        <th>Category</th>
                                                                        <th>Sub Category</th>
                                                                        <th>Status</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($Unactbrnds as $Unactbrnd)
                                                                        <tr>
                                                                            <td>{{ $Unactbrnd->id }}</td>
                                                                            <td>{{ $Unactbrnd->name }}</td>
                                                                            <td>{{ $Unactbrnd->categories->name }}</td>
                                                                            <td>{{ $Unactbrnd->subcategories->name }}
                                                                            </td>
                                                                            <td><span
                                                                                    class="label label-danger font-weight-100">{{ $Unactbrnd->status == 1 ? 'Active' : 'Deactive' }}</span>
                                                                            </td>
                                                                            <td>
                                                                                <a href="{{ url('admin/restore-brand/restore') }}/{{ $Unactbrnd->id }}"
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
                            <h4 class="modal-title" id="exampleModalLabel1">New Brands</h4>
                        </div>
                        <form action="{{ url('admin/brands') }}/add" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Brand Name:</label>
                                    <input type="text" class="form-control" id="recipient-name1" placeholder="Brand Name"
                                        name="name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Category Name:</label>
                                    <select class="form-control" data-placeholder="Choose a Category" tabindex="1"
                                        id="category" name="category_id">
                                        <option disabled selected>Category</option>
                                        @foreach ($cats as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Sub Category Name:</label>
                                    <select class="form-control" data-placeholder="Choose a Category" tabindex="1"
                                        id="subCat" name="subCategory_id">
                                        <option disabled selected>Sub category</option>
                                    </select>
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

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#category').change(function(e) {
                e.preventDefault();
                var cat_id = $(this).val();
                $.ajax({
                    url: '/admin/getSubCat',
                    type: 'POST',
                    data: {
                        cat_id: cat_id,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        $('#subCat').html(data);
                    }
                });
            })
        });
    </script>
@endpush

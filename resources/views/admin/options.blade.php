@extends('admin/layouts/main')

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Edit Option</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                        <li class="active">Option</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading"> Edit Options</div>
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <form action="{{ url('admin/option') }}/add" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <h3 class="box-title">About Website</h3>
                                        <hr>
                                        @foreach ($options as $option)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Website Name</label>
                                                        <input type="text" id="firstName" class="form-control"
                                                            placeholder="Website Name" name="name"
                                                            value="{{ $option->name }}">
                                                        <input type="hidden" name="id" value="{{ $option->id }}">
                                                        <span class="text-danger">
                                                            @error('name')
                                                                *{{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Website Title</label>
                                                        <input type="text" id="lastName" class="form-control"
                                                            placeholder="Website Title" name="title"
                                                            value="{{ $option->title }}">
                                                        <span class="text-danger">
                                                            @error('title')
                                                                *{{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="control-label">Website Description</label>
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="4"
                                                            name="descript">{{ $option->description }}</textarea>
                                                        <span class="text-danger">
                                                            @error('descript')
                                                                *{{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="ti-email"></i>
                                                            </div>
                                                            <input type="email" class="form-control"
                                                                id="exampleInputuname" placeholder="Email" name="email"
                                                                value="{{ $option->email }}">
                                                        </div>
                                                        <span class="text-danger">
                                                            @error('email')
                                                                *{{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Contact</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="ti-mobile"></i>
                                                            </div>
                                                            <input type="text" class="form-control" id="exampleInputuname"
                                                                placeholder="Contact Us" name="contact"
                                                                value="{{ $option->contact }}">
                                                        </div>
                                                        <span class="text-danger">
                                                            @error('contact')
                                                                *{{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h3 class="box-title m-t-20">Website Logo</h3>
                                                    <div class="product-img mt-5"> <img
                                                            src="{{ asset('storage') }}/{{ $option->logo }}">
                                                        <div class="fileupload btn btn-info waves-effect waves-light">
                                                            <span><i class="ion-upload m-r-5"></i>Upload
                                                                Image</span>
                                                            <input type="file" class="upload" name="logo"
                                                                value="{{ $option->logo }}">
                                                            <input type="hidden" name="logo" value="{{ $option->logo }}">
                                                        </div>
                                                    </div>
                                                    <span class="text-danger">
                                                        @error('logo')
                                                            *{{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                {{-- {{ dd($option) }} --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Currency</label>
                                                        <select class="form-control" data-placeholder="Choose a Category"
                                                            tabindex="1" id="category" name="currency">
                                                            <option value="">Currency</option>
                                                            @foreach ($crrncy as $cur)
                                                                <option
                                                                    {{ $option->currency == $cur->symbol ? 'selected' : '' }}
                                                                    value="{{ $cur->symbol }}">{{ $cur->country }}
                                                                    ({{ $cur->code }})
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <span class="text-danger">
                                                            @error('currency')
                                                                *{{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="ti-location-pin"></i>
                                                            </div>
                                                            <textarea class="form-control" rows="3"
                                                                name="address">{{ $option->address }}</textarea>
                                                        </div>
                                                        <span class="text-danger">
                                                            @error('address')
                                                                *{{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Footer Text</label>
                                                        <input type="text" id="lastName" class="form-control"
                                                            placeholder="Footer Text" name="footertxt"
                                                            value="{{ $option->footertxt }}">
                                                        <span class="text-danger">
                                                            @error('footertxt')
                                                                *{{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        @endforeach
                                    </div>
                                    <div class="form-actions m-t-40">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>
                                            Save</button>
                                        <button type="button" class="btn btn-default">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
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
                    url: '/getSubCat',
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

            $('#subCat').change(function(e) {
                e.preventDefault();
                var subcat_id = $(this).val();
                $.ajax({
                    url: '/getBrnd',
                    type: 'POST',
                    data: {
                        subcat_id: subcat_id,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        $('#brands').html(data);
                    }
                });
            })
        });
    </script>
@endpush

@extends('admin/layouts/main')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">{{ $heading }}</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                        <li class="">Products</li>
                    <li class=" active">{{ $heading }}</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">{{ $heading }}</div>
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <form action="{{ url('admin/add-products') }}/add" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <h3 class="box-title">About Product</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Product Name</label>
                                                    <input type="text" id="firstName" class="form-control"
                                                        placeholder="Product Name" value="{{ $product_edit->name ?? '' }}"
                                                        name="name">
                                                    <input type="hidden" name="id" value="{{ $product_edit->id ?? '' }}">
                                                    <span class="text-danger">
                                                        @error('name')
                                                            *{{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Sub heading</label>
                                                    <input type="text" id="lastName" class="form-control"
                                                        placeholder="Sub heading"
                                                        value="{{ $product_edit->sub_heading ?? '' }}" name="sub_heading">
                                                    <span class="text-danger">
                                                        @error('sub_heading')
                                                            *{{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Category</label>
                                                    <select class="form-control" data-placeholder="Choose a Category"
                                                        tabindex="1" id="category" name="category_id">
                                                        <option value="" disabled selected>Category</option>
                                                        @foreach ($cats as $cat)
                                                            <option value="{{ $cat->id }}"
                                                                {{ isset($product_edit) ? ($product_edit->category_id == $cat->id ? 'selected' : '') : '' }}>
                                                                {{ $cat->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <span class="text-danger">
                                                        @error('category_id')
                                                            *{{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    @if (request()->route()->uri() == 'admin/edit-products/edit/{id}')
                                                        <label class="control-label">Sub Category</label>
                                                        <select class="form-control" data-placeholder="Choose a Category"
                                                            tabindex="1" id="subCat" name="subCategory_id">
                                                            <option value="" disabled selected>Sub Category</option>
                                                            @foreach (\App\Models\Subcategory::where('category', $product_edit->category_id)->get() as $subcat)
                                                                <option value="{{ $subcat->id }}"
                                                                    {{ isset($product_edit) ? ($product_edit->subcategory_id == $subcat->id ? 'selected' : '') : '' }}>
                                                                    {{ $subcat->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <span class="text-danger">
                                                            @error('subCategory_id')
                                                                *{{ $message }}
                                                            @enderror
                                                        </span>
                                                    @else
                                                        <label class="control-label">Sub Category</label>
                                                        <select class="form-control" data-placeholder="Choose a Category"
                                                            tabindex="1" id="subCat" name="subCategory_id">
                                                            <option value="" disabled selected>Sub Category</option>
                                                        </select>
                                                        <span class="text-danger">
                                                            @error('subCategory_id')
                                                                *{{ $message }}
                                                            @enderror
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    @if (request()->route()->uri() == 'admin/edit-products/edit/{id}')
                                                        <label class="control-label">Brands</label>
                                                        <select class="form-control" data-placeholder="Choose a Category"
                                                            tabindex="1" id="brands" name="brand_id">
                                                            <option value="" disabled selected>Select Brands</option>
                                                            @foreach (\App\Models\Brand::where('subCategory_id', $product_edit->subcategory_id)->get() as $brand)
                                                                <option value="{{ $brand->id }}"
                                                                    {{ isset($product_edit) ? ($product_edit->brand_id == $brand->id ? 'selected' : '') : '' }}>
                                                                    {{ $brand->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <span class="text-danger">
                                                            @error('brand_id')
                                                                *{{ $message }}
                                                            @enderror
                                                        </span>
                                                    @else
                                                        <label class="control-label">Brands</label>
                                                        <select class="form-control" data-placeholder="Choose a Category"
                                                            tabindex="1" id="brands" name="brand_id">
                                                            <option value="" selected>Select Brands</option>
                                                        </select>
                                                        <span class="text-danger">
                                                            @error('brand_id')
                                                                *{{ $message }}
                                                            @enderror
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>MRP</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="ti-money"></i></div>
                                                        <input type="text" class="form-control" id="exampleInputuname"
                                                            placeholder="MRP" value="{{ $product_edit->mrp ?? '' }}"
                                                            name="mrp">
                                                    </div>
                                                    <span class="text-danger">
                                                        @error('mrp')
                                                            *{{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Selling Price</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="ti-money"></i>
                                                        </div>
                                                        <input type="text" class="form-control" id="exampleInputuname"
                                                            placeholder="Price" value="{{ $product_edit->price ?? '' }}"
                                                            name="price">
                                                    </div>
                                                    <span class="text-danger">
                                                        @error('price')
                                                            *{{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Discount</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="ti-cut"></i></div>
                                                        <input type="text" class="form-control" id="exampleInputuname"
                                                            placeholder="Discount"
                                                            value="{{ $product_edit->discount ?? '' }}" name="discount">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="box-title">Product Description</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="4"
                                                        name="descript">{{ $product_edit->descript ?? '' }}</textarea>
                                                    <span class="text-danger">
                                                        @error('descript')
                                                            *{{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Status</label>
                                                    <div class="radio-list">
                                                        <label class="radio-inline p-0">
                                                            <div class="radio radio-info">
                                                                <input type="radio" name="status" id="radio1" value="1"
                                                                    {{ isset($product_edit) ? ($product_edit->status == 1 ? 'checked' : '') : '' }}>
                                                                <label for="radio1">Published</label>
                                                            </div>
                                                        </label>
                                                        <label class="radio-inline">
                                                            <div class="radio radio-info">
                                                                <input type="radio" name="status" id="radio2" value="0"
                                                                    {{ isset($product_edit) ? ($product_edit->status == 0 ? 'checked' : '') : '' }}>
                                                                <label for="radio2">Draft</label>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <span class="text-danger">
                                                        @error('status')
                                                            *{{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <h3 class="box-title m-t-20">Upload Image</h3>
                                                <div class="product-img">
                                                    <img class="clone-img" style="display: none;"
                                                        src="{{ asset('storage') }}/{{ $product_edit->image ?? 'upload.png' }}">
                                                    <div class="fileupload btn btn-info waves-effect waves-light">
                                                        <span><i class="ion-upload m-r-5"></i>Upload
                                                            Image</span>
                                                        <input type="file" class="upload"
                                                            value="{{ $product_edit->image ?? '' }}" name="multi_img[]"
                                                            id="product_image" multiple>
                                                        @if (!isset($product_edit))
                                                            <input type="hidden" name="multi_img[]"
                                                                value="{{ $product_edit->image ?? '' }}">
                                                        @endif
                                                    </div>
                                                </div>
                                                <span class="text-danger">
                                                    @error('multi_img.0')
                                                        *{{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="col-ms-11">
                                                <div class="review d-flex flex-wrap">
                                                    @if (isset($product_edit))
                                                        @php
                                                            $singleImg = explode(',', $product_edit->image);
                                                        @endphp
                                                        @foreach ($singleImg as $image)
                                                            <img src="{{ asset('storage') }}/{{ $image }}"
                                                                name="multi_img[]" alt="" width="150px">
                                                            <input type="hidden" name="multi_img[]"
                                                                value="{{ $image ?? '' }}">
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="box-title m-t-40">GENERAL INFO</h3>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered td-padding">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-control">
                                                                        <span class="text-dark font-500">COLOR : </span>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input"
                                                                                name="color[]" id="black" value="black"
                                                                                {{ isset($product_edit) ? (in_array('black', explode(',', $product_edit->color)) ? 'checked' : '') : '' }}>
                                                                            Black
                                                                        </label>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input"
                                                                                name="color[]" id="blue" value="blue"
                                                                                {{ isset($product_edit) ? (in_array('blue', explode(',', $product_edit->color)) ? 'checked' : '') : '' }}>
                                                                            Blue
                                                                        </label>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input"
                                                                                name="color[]" id="green" value="green"
                                                                                {{ isset($product_edit) ? (in_array('green', explode(',', $product_edit->color)) ? 'checked' : '') : '' }}>
                                                                            Green
                                                                        </label>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input"
                                                                                name="color[]" id="purple" value="purple"
                                                                                {{ isset($product_edit) ? (in_array('purple', explode(',', $product_edit->color)) ? 'checked' : '') : '' }}>
                                                                            Purple
                                                                        </label>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input"
                                                                                name="color[]" id="red" value="red"
                                                                                {{ isset($product_edit) ? (in_array('red', explode(',', $product_edit->color)) ? 'checked' : '') : '' }}>
                                                                            Red
                                                                        </label>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input"
                                                                                name="color[]" id="white" value="white"
                                                                                {{ isset($product_edit) ? (in_array('white', explode(',', $product_edit->color)) ? 'checked' : '') : '' }}>
                                                                            White
                                                                        </label>
                                                                    </div>
                                                                    <span class="text-danger">
                                                                        @error('color')
                                                                            *{{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <div class="form-control">
                                                                        <span class="text-dark font-500">ROM : </span>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input"
                                                                                name="storage[]" id="black" value="16GB"
                                                                                {{ isset($product_edit) ? (in_array('16GB', explode(',', $product_edit->storage)) ? 'checked' : '') : '' }}>
                                                                            16
                                                                            GB
                                                                        </label>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input"
                                                                                name="storage[]" id="black" value="32GB"
                                                                                {{ isset($product_edit) ? (in_array('32GB', explode(',', $product_edit->storage)) ? 'checked' : '') : '' }}>
                                                                            32
                                                                            GB
                                                                        </label>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input"
                                                                                name="storage[]" id="black" value="64GB"
                                                                                {{ isset($product_edit) ? (in_array('64GB', explode(',', $product_edit->storage)) ? 'checked' : '') : '' }}>
                                                                            64
                                                                            GB
                                                                        </label>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input"
                                                                                name="storage[]" id="black" value="128GB"
                                                                                {{ isset($product_edit) ? (in_array('128GB', explode(',', $product_edit->storage)) ? 'checked' : '') : '' }}>
                                                                            128
                                                                            GB
                                                                        </label>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input"
                                                                                name="storage[]" id="black" value="256GB"
                                                                                {{ isset($product_edit) ? (in_array('256GB', explode(',', $product_edit->storage)) ? 'checked' : '') : '' }}>
                                                                            256
                                                                            GB
                                                                        </label>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input"
                                                                                name="storage[]" id="black" value="512GB"
                                                                                {{ isset($product_edit) ? (in_array('512GB', explode(',', $product_edit->storage)) ? 'checked' : '') : '' }}>
                                                                            512
                                                                            GB
                                                                        </label>
                                                                    </div>
                                                                    <span class="text-danger">
                                                                        @error('storage')
                                                                            *{{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-control">
                                                                        <span class="text-dark font-500">RAM : </span>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox"
                                                                                class="form-check-input font-normal"
                                                                                name="ram[]" id="2GB" value="2GB"
                                                                                {{ isset($product_edit) ? (in_array('2GB', explode(',', $product_edit->ram)) ? 'checked' : '') : '' }}>
                                                                            2 GB
                                                                        </label>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input"
                                                                                name="ram[]" id="3GB" value="3GB"
                                                                                {{ isset($product_edit) ? (in_array('3GB', explode(',', $product_edit->ram)) ? 'checked' : '') : '' }}>
                                                                            3 GB
                                                                        </label>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input"
                                                                                name="ram[]" id="4GB" value="4GB"
                                                                                {{ isset($product_edit) ? (in_array('4GB', explode(',', $product_edit->ram)) ? 'checked' : '') : '' }}>
                                                                            4 GB
                                                                        </label>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input"
                                                                                name="ram[]" id="6GB" value="6GB"
                                                                                {{ isset($product_edit) ? (in_array('6GB', explode(',', $product_edit->ram)) ? 'checked' : '') : '' }}>
                                                                            6 GB
                                                                        </label>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input"
                                                                                name="ram[]" id="8GB" value="8GB"
                                                                                {{ isset($product_edit) ? (in_array('8GB', explode(',', $product_edit->ram)) ? 'checked' : '') : '' }}>
                                                                            8 GB
                                                                        </label>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input"
                                                                                name="ram[]" id="10GB" value="10GB"
                                                                                {{ isset($product_edit) ? (in_array('10GB', explode(',', $product_edit->ram)) ? 'checked' : '') : '' }}>
                                                                            10 GB
                                                                        </label>
                                                                    </div>
                                                                    <span class="text-danger">
                                                                        @error('ram')
                                                                            *{{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <div class="form-control">
                                                                        <span class="text-dark font-500">Connectivity :
                                                                        </span>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input"
                                                                                name="connectivity[]" id="black" value="2G"
                                                                                {{ isset($product_edit) ? (in_array('2G', explode(',', $product_edit->connectivity)) ? 'checked' : '') : '' }}>
                                                                            2G
                                                                        </label>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input"
                                                                                name="connectivity[]" id="black" value="3G"
                                                                                {{ isset($product_edit) ? (in_array('3G', explode(',', $product_edit->connectivity)) ? 'checked' : '') : '' }}>
                                                                            3G
                                                                        </label>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input"
                                                                                name="connectivity[]" id="black" value="4G"
                                                                                {{ isset($product_edit) ? (in_array('4G', explode(',', $product_edit->connectivity)) ? 'checked' : '') : '' }}>
                                                                            4G
                                                                        </label>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input"
                                                                                name="connectivity[]" id="black" value="5G"
                                                                                {{ isset($product_edit) ? (in_array('5G', explode(',', $product_edit->connectivity)) ? 'checked' : '') : '' }}>
                                                                            5G
                                                                        </label>
                                                                    </div>
                                                                    <span class="text-danger">
                                                                        @error('connectivity')
                                                                            *{{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <select class="form-control" name="condition" id="">
                                                                        <option value="">Condition</option>
                                                                        <option value="Brand New"
                                                                            {{ isset($product_edit) ? ($product_edit->condition == 'Brand New' ? 'selected' : '') : '' }}>
                                                                            Brand New</option>
                                                                        <option value="Refubrished"
                                                                            {{ isset($product_edit) ? ($product_edit->condition == 'Refubrished' ? 'selected' : '') : '' }}>
                                                                            Refubrished</option>
                                                                    </select>
                                                                    <span class="text-danger">
                                                                        @error('condition')
                                                                            *{{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Quantity"
                                                                        value="{{ $product_edit->quantity ?? '' }}"
                                                                        name="quantity">
                                                                    <span class="text-danger">
                                                                        @error('quantity')
                                                                            *{{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Type"
                                                                        value="{{ $product_edit->type ?? '' }}"
                                                                        name="type">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Sim Style"
                                                                        value="{{ $product_edit->simstyle ?? '' }}"
                                                                        name="simstyle">
                                                                    <span class="text-danger">
                                                                        @error('simstyle')
                                                                            *{{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Model No."
                                                                        value="{{ $product_edit->model ?? '' }}"
                                                                        name="model">
                                                                    <span class="text-danger">
                                                                        @error('model')
                                                                            *{{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Warranty"
                                                                        value="{{ $product_edit->warranty ?? '' }}"
                                                                        name="warranty">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
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
                    url: '/admin/getSubCat',
                    type: 'POST',
                    data: {
                        cat_id: cat_id,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        console.log(data);
                        $('#subCat').html(data);
                    }
                });
            })

            $('#subCat').change(function(e) {
                e.preventDefault();
                var subcat_id = $(this).val();
                $.ajax({
                    url: '/admin/getBrnd',
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

            $('#product_image').change(function(e) {
                e.preventDefault();
                // var input = this;
                // var length = input.files.length;
                // for (var i = 0; i < length; i++) {
                //     if (input.files[i]) {
                //         var reader = new FileReader();
                //         reader.onload = function(e) {
                //             var img = $('.product-img .clone-img').clone();
                //             img.addClass('img-' + (i + 1));
                //             img.removeClass('clone-img');
                //             img.css('display', 'block').css('width', '100px').css('height', '120px');
                //             img.attr('src', e.target.result);
                //             $('.review').append(img);
                //         }
                //         reader.readAsDataURL(input.files[i]);
                //     } else {
                //         alert('select a file to see preview');
                //     }
                // }
                var fileList = e.target.files;
                var anyWindow = window.URL || window.webkitURL;
                for (var i = 0; i < 10; i++) {
                    var objectUrl = anyWindow.createObjectURL(fileList[i]);
                    $('.review').append('<img src="' + objectUrl +
                        '" class="rounded img-thumbnail mx-auto d-block" width="120px" height="160px"  />'
                    );
                    window.URL.revokeObjectURL(fileList[i]);
                }
            });
        });
    </script>
@endpush

@extends('admin.admin-master')
@section('products') active show-sub @endsection
@section('manage-products') active @endsection
@section('admin_content')

<div class="form-group mc" style="margin-left:22%; margin-right:10%; margin-top:7%;">

    <div class="row">
        <div class="col-sm-5 col-5">
            <h3 class="page-title">Show Product</h3>
        </div><br><br>
        <div class="col-sm-7 col-7 text-right m-b-30"></div>
    </div>
   
    <div class="row">
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name:</strong>
                {{ $product->product_name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Code:</strong>
                {{ $product->product_code }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Quantity:</strong>
                {{ $product->product_quantity }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Price:</strong>
                {{ $product->price }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                {{ $product->category->category_name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sub-Category:</strong>
                {{ $product->subcategory->subcategory_name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Short Description:</strong>
                {!! $product->short_description !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Long Description:</strong>
                {!! $product->long_description !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
            </div>
            <div class="form-group">
                    <img src="{{ asset($product->image_one) }}" height="300" width="300" alt="" />
                    <img src="{{ asset($product->image_two) }}" height="300" width="300" alt="" />
                    <img src="{{ asset($product->image_three) }}" height="300" width="300" alt="" />
            </div>
        </div>

    </div>
    
</div>
@endsection
@extends('admin.master')

@section('title')
    Add Product
@endsection

@section('body')
    <div class="row">
        <br><br><br>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Add Product Form</h4>

                </div>
                <div class="panel-body">
                    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
{{--                    <form action="{{ route('new-product') }}" method="POST" class="form-horizontal">--}}
                    {{Form::open(['route'=>'new-product','method'=>'POST','files'=> true,'class'=>'form-horizontal','enctype'=>'multipart/form-data' ])}}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <select name="category_id" id="" class="form-control">
                                    <option>---Select Category Name--</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach

                                </select>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Brand Name</label>
                            <div class="col-md-8">
                                <select name="brand_id" id="" class="form-control">
                                    <option>---Select Brand Name--</option>
                                    @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                    @endforeach

                                </select>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Product Name</label>
                            <div class="col-md-8">
                                <input type="text" name="product_name" class="form-control"/>
                                <span class="text-danger">{{$errors->has('product_name')?$errors->first('product_name'):'' }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Product Price</label>
                            <div class="col-md-8">
                                <input type="number" name="product_price" class="form-control"/>
                                <span class="text-danger">{{$errors->has('product_price')?$errors->first('product_price'):'' }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Product Quantity</label>
                            <div class="col-md-8">
                                <input type="number" name="product_quantity" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Product Short Description</label>
                            <div class="col-md-8">
                                <textarea name="short_description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Product Long Description</label>
                            <div class="col-md-8">
                                <textarea name="long_description" class="form-control" id="editor"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Product Image</label>
                            <div class="col-md-8">
                                <input type="file" name="product_image" accept="image/*" />
                                <span class="text-danger">{{$errors->has('product_image')?$errors->first('product_image'):'' }}</span>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Publication status</label>
                            <div class="col-md-9">
                                <label><input type="radio" name="publication_status" value="1"/> Published</label>
                                <label><input type="radio" name="publication_status" value="0"/> Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" name="btn" value="Save Product Info" class="btn btn-success btn-block"/>
                            </div>
                        </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>


@endsection

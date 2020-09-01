    @extends('admin.master')
    @section('title')
        View Product
    @endsection
    @section('body')
        <div class="row">
            <br><br><br>
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="text-center text-success">View Product Info Form</h4>
                    </div>
                    <div class="panel-body">
                        <h3 class="text-center text-success" id="xyz">{{Session::get('message')}}</h3>
                        <table class="table-bordered">
                                <tr>
                                    <th>Product ID</th>
                                    <td>{{$product->id}}</td>
                                </tr>
                                <tr>
                                    <th>Product Name</th>
                                    <td>{{$product->product_name}}</td>
                                </tr>
                                <tr>
                                    <th>Category ID</th>
                                    <td>{{$product->category_id}}</td>
                                </tr>
                                <tr>
                                    <th>Brand ID</th>
                                    <td>{{$product->brand_id}}</td>
                                </tr>
                                <tr>
                                    <th>Product Price</th>
                                    <td>{{$product->product_price}}</td>
                                </tr>
                            </table>

                    </div>
                </div>

            </div>

        </div>
    @endsection

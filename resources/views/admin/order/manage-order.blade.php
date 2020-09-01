    @extends('admin.master')
    <br/>
    <br/>
    @section('title')
        Manage Order
        @endsection
    <br>
    @section('body')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="text-center text-success">Manage Order Form</h4>
                    </div>
                    <div class="panel-body">
                        <h3 class="text-center text-success" id="xyz">{{Session::get('message')}}</h3>
                        <table class="table table-bordered">
                            <tr class="bg-primary">
                                <th>Sl No.</th>
                                <th>Customer Name</th>
                                <th>Order Total</th>
                                <th>Order Status</th>
                                <th>Payment Type</th>
                                <th>Payment Status</th>
                                <th>Order Date</th>
                                <th>Action</th>
                            </tr>
                            @php($i=1)
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$order->first_name.' '.$order->last_name}}</td>
                                    <td>{{$order->order_total}}</td>
                                    <td>{{$order->order_status}}</td>
                                    <td>{{$order->payment_type}}</td>
                                    <td>{{$order->payment_status}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <td>
                                        <a href="{{route('view-order',['id'=>$order->id])}}" title="View Order Details" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-zoom-in"></span>
                                        </a>
                                            <a href="{{route('view-invoice',['id'=>$order->id])}}" title="View Order Invoice" class="btn btn-warning btn-xs">
                                                <span class="glyphicon glyphicon-zoom-out"></span>
                                            </a>
                                        <a href="{{route('download-invoice',['id'=>$order->id])}}" title="Download Order Invoice" class="btn btn-warning btn-xs">
                                                <span class="glyphicon glyphicon-download"></span>
                                            </a>
                                        <a href="{{route('edit-category',['id'=>$order->id])}}" title="Edit Order" class="btn btn-success btn-xs">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="{{route('delete-order',['id'=>$order->id])}}" title="Delete Order" class="btn btn-danger btn-xs">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endsection

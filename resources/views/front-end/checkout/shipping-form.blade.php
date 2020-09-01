@extends('front-end.master')
@section('title')
    Shipping Form
    @endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="well text-success text-center">
                    Welcome dear <strong>{{Session::get('customerName')}}</strong>, you have to give us product shipping info to complete your valuable Order.If your billing and shipping info are same then just press on shipping info button.
                </div>
            </div>

        </div>
        <div class="row">
            <br>
            <div class="col-md-6 col-md-offset-3 well">
                <br>
                <h3 class="text-center text-success">Shipping Form</h3>
                <hr>
                <form action="{{url('/checkout/new-shipping')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label for="" class="col-md-3">Full Name</label>
                        <div class="col-md-9">
                            <input type="text" value="{{ $customer->first_name.' '.$customer->last_name }}" name="full_name" class="form-control">

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3">Email Address</label>
                        <div class="col-md-9">
                            <input type="email" value="{{$customer->email_address}}" name="email_address" class="form-control">

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3">Phone Number</label>
                        <div class="col-md-9">
                            <input type="number" value="{{$customer->phone_number}}" name="phone_number" class="form-control">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-3">Address</label>
                        <div class="col-md-9">
                            <textarea name="address" id=""  class="form-control">{{$customer->address}}</textarea>

                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-md-9 col-md-offset-3" >
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Shipping Info">

                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
    @endsection

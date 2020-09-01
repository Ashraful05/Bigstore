@extends('front-end.master')
@section('title')
    Checkout
    @endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="well text-success text-center">
                    You have to login to complete your order. If you are not register please register first.
                </div>
            </div>

        </div>
        <div class="row">
            <br>
            <div class="col-md-6 well">
                <br>
                <h3 class="text-center text-success">Registration Form</h3>
                <hr>
                <form action="{{url('new-customer')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label for="" class="col-md-3">First Name</label>
                        <div class="col-md-9">
                            <input type="text" name="first_name" class="form-control">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-3">Last Name</label>
                        <div class="col-md-9">
                            <input type="text" name="last_name" class="form-control">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-3">Email Address</label>
                        <div class="col-md-9">
                            <input type="email" name="email_address" class="form-control">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-3">Password</label>
                        <div class="col-md-9">
                            <input type="password" name="password" class="form-control">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-3">Phone Number</label>
                        <div class="col-md-9">
                            <input type="number" name="phone_number" class="form-control">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-3">Address</label>
                        <div class="col-md-9">
                            <textarea name="address" id=""  class="form-control"></textarea>

                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-md-9 col-md-offset-3" >
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Registration">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 well">
                <br>
                <h3 class="text-center text-success">LogIn Form</h3>
                <hr>
                <form action="{{route('customer-login')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label for="" class="col-md-3">Email Address</label>
                        <div class="col-md-9">
                            <input type="text" name="email_address" class="form-control">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-3">Password</label>
                        <div class="col-md-9">
                            <input type="password" name="password" class="form-control">

                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-md-9 col-md-offset-3" >
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="LogIn">

                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
    @endsection

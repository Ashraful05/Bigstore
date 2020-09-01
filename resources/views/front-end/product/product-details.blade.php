@extends('front-end.master')
@section('title')
    Product Detail
    @endsection

@section('body')
    <div class="banner-top">
        <div class="container">
            <h3 >Lorem</h3>
            <h4><a href="index.html">Home</a><label>/</label>Lorem</h4>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="single">
        <div class="container">
            <div class="single-top-main">
                <div class="col-md-5 single-top">
                    <div class="single-w3agile">

                        <div id="picture-frame">
                            <img src="{{asset($product->product_image)}}" data-src="{{asset($product->product_image)}}" alt="" class="img-responsive"/>
                        </div>
                        <script src="{{asset('/')}}/front/js/jquery.zoomtoo.js"></script>
                        <script>
                            $(function() {
                                $("#picture-frame").zoomToo({
                                    magnify: 1
                                });
                            });
                        </script>



                    </div>
                </div>
                <div class="col-md-7 single-top-left ">
                    <div class="single-right">
                        <h3>{{$product->product_name}}</h3>


                        <div class="pr-single">
                            <p class="reduced ">TK. {{$product->product_price}}</p>
                        </div>
                        <div class="block block-w3">
                            <div class="starbox small ghosting"> </div>
                        </div>
                        <p class="in-pa"> {{$product->short_description}} </p>

                        <ul class="social-top">
                            <li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
                            <li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
                            <li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
                            <li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
                        </ul>
                        <form action="{{route('add-to-cart')}}" method="post">
                            @csrf
                        <div class="add add-3">
                            Quantity:
                            <input type="number" min="1" value="1" name="qty">
                            <input type="hidden"  value="{{$product->id}}" name="product_id">
                            <button class="btn btn-success" type="submit">Add to Cart</button>
                        </div>
                        </form>



                        <div class="clearfix"> </div>
                    </div>


                </div>
                <div class="clearfix"> </div>
            </div>


        </div>
    </div>
    <!---->

    <div class="single">
        <div class="container">
            <div class="single-top-main well">
                <h3 class="text-success text-center">Product Long Description</h3>
                <hr>
                <p>{{$product->long_description}}</p>
            </div>
        </div>
    </div>

    <div class="content-top offer-w3agile">
        <div class="container ">
            <div class="spec ">
                <h3>Special Offers</h3>
                <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                </div>
            </div>
            <div class=" con-w3l wthree-of">


                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
                            <img src="{{asset('/')}}/front/images/of4.png" class="img-responsive" alt="">
                            <div class="offer"><p><span>Offer</span></p></div>
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html">Lays</a>(100 g)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$1.00</label><em class="item_price">$0.70</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal6" class="offer-img">
                            <img src="{{asset('/')}}/front/images/of5.png" class="img-responsive" alt="">
                            <div class="offer"><p><span>Offer</span></p></div>
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html">Kurkure</a>(100 g)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$1.00</label><em class="item_price">$0.70</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="6" data-name="Kurkure" data-summary="summary 6" data-price="0.70" data-quantity="1" data-image="{{asset('/')}}/front/images/of5.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal7" class="offer-img">
                            <img src="{{asset('/')}}/front/images/of6.png" class="img-responsive" alt="">
                            <div class="offer"><p><span>Offer</span></p></div>
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html">Popcorn</a>(250 g)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$2.00</label><em class="item_price">$1.00</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="7" data-name="product 1" data-summary="summary 1" data-price="1.00" data-quantity="1" data-image="{{asset('/')}}/front/images/of6.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal8" class="offer-img">
                            <img src="{{asset('/')}}/front/images/of7.png" class="img-responsive" alt="">
                            <div class="offer"><p><span>Offer</span></p></div>
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html"> Nuts</a>(250 g)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="8" data-name="Nuts" data-summary="summary 8" data-price="3.50" data-quantity="1" data-image="{{asset('/')}}/front/images/of7.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal9" class="offer-img">
                            <img src="{{asset('/')}}/front/images/of8.png" class="img-responsive" alt="">
                            <div class="offer"><p><span>Offer</span></p></div>
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html">Banana</a>(6 pcs)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$2.00</label><em class="item_price">$1.50</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="9" data-name="Banana" data-summary="summary 9" data-price="1.50" data-quantity="1" data-image="{{asset('/')}}/front/images/of8.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal10" class="offer-img">
                            <img src="{{asset('/')}}/front/images/of9.png" class="img-responsive" alt="">
                            <div class="offer"><p><span>Offer</span></p></div>
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html">Onion</a>(1 kg)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$1.00</label><em class="item_price">$0.70</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="10" data-name="Onion" data-summary="summary 10" data-price="0.70" data-quantity="1" data-image="{{asset('/')}}/front/images/of9.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal11" class="offer-img">
                            <img src="{{asset('/')}}/front/images/of10.png" class="img-responsive" alt="">
                            <div class="offer"><p><span>Offer</span></p></div>
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html"> Bitter Gourd</a>(1 kg)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$2.00</label><em class="item_price">$1.00</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="11" data-name="Bitter Gourd" data-summary="summary 11" data-price="1.00" data-quantity="1" data-image="{{asset('/')}}/front/images/of10.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal12" class="offer-img">
                            <img src="{{asset('/')}}/front/images/of11.png" class="img-responsive" alt="">
                            <div class="offer"><p><span>Offer</span></p></div>
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html">Apples</a>(1 kg)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="12" data-name="Apples" data-summary="summary 12" data-price="3.50" data-quantity="1" data-image="{{asset('/')}}/front/images/of11.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal13" class="offer-img">
                            <img src="{{asset('/')}}/front/images/of12.png" class="img-responsive" alt="">
                            <div class="offer"><p><span>Offer</span></p></div>
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html">Honey</a>(500g)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$7.00</label><em class="item_price">$6.00</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="13" data-name="Honey" data-summary="summary 13" data-price="6.00" data-quantity="1" data-image="{{asset('/')}}/front/images/of12.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal14" class="offer-img">
                            <img src="{{asset('/')}}/front/images/of13.png" class="img-responsive" alt="">
                            <div class="offer"><p><span>Offer</span></p></div>
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html">Chocos</a>(250g)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$5.00</label><em class="item_price">$4.50</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="14" data-name="Chocos" data-summary="summary 14" data-price="4.50" data-quantity="1" data-image="{{asset('/')}}/front/images/of13.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal15" class="offer-img">
                            <img src="{{asset('/')}}/front/images/of14.png" class="img-responsive" alt="">
                            <div class="offer"><p><span>Offer</span></p></div>
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html">Oats</a>(1 kg)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="15" data-name="Oats" data-summary="summary 15" data-price="3.50" data-quantity="1" data-image="{{asset('/')}}/front/images/of14.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal16" class="offer-img">
                            <img src="{{asset('/')}}/front/images/of15.png" class="img-responsive" alt="">
                            <div class="offer"><p><span>Offer</span></p></div>
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html">Bread</a>(500 g)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$1.00</label><em class="item_price">$0.80</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="16" data-name="Bread" data-summary="summary 16" data-price="0.80" data-quantity="1" data-image="{{asset('/')}}/front/images/of15.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    @endsection

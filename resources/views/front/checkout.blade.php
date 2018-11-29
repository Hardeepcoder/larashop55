@extends('front.master')
  @section('content')

  <div class="greyBg">
      <div class="container">
  		<div class="wrapper">
        <div class="row">
  				<div class="col-sm-12">
  				 <div class="breadcrumbs">
  			       <ul>
  			          <li><a href="{{url('/')}}">Home </a></li>
                   <li><span class="dot">/</span>
                    <a href="">cart</a>
  			        </ul>
              </div>
           </div>
  		    </div>
            @if(Cart::count()!="0")
          <!-- design of cart page -->
          <div class="row top20 hidden-xs">
                <div class="col-sm-3">
                  <div class="wht-box">
                    <div class="wht-boxHd">Shopping Cart</div>
                    <div class="bwhtlk-boxTxt hidden-sm">Do you want to look on order?</div>
                    
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="blk-box">
                    <div class="blk-boxHd">Billing &amp; Shipping</div>
                    <div class="blk-boxTxt hidden-sm">Where should we send this order?</div>
                    <div class="arrow-down"></div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="wht-box">
                    <div class="wht-boxHd">Order Review</div>
                    <div class="wht-boxTxt hidden-sm">How do you want to pay for your order?</div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="wht-box">
                    <div class="wht-boxHd">Confirmation</div>
                    <div class="wht-boxTxt hidden-sm">Confirm your order</div>
                  </div>
                </div>
            </div>
         </div>
<br><hr>
<div class="row ">

<form action="{{url('/placeOrder')}}" method="post">
<input type="hidden" value="{{csrf_token()}}" name="_token"/>
<h3 class="text-center">Fill billing address </h3>
  <div class="form-group">
        <div class="col-md-6">
            <!-- First name -->
            <input type="text"  class="form-control" placeholder="Full name" name="fullname" 
            value="{{Auth::user()->name}}">
            <span style="color:red">{{ $errors->first('fullname') }}</span>
            <br>  <br>
            <input type="email"  class="form-control" placeholder="Email" name="email"
            value="{{Auth::user()->email}}">
            <span style="color:red">{{ $errors->first('email') }}</span>
            <br>  <br>
            <input type="text"  class="form-control" placeholder="Phone number" name="phone">
            <span style="color:red">{{ $errors->first('phone') }}</span>
            <br>  <br>
            <input type="text"  class="form-control" placeholder="City name" name="city">
            <span style="color:red">{{ $errors->first('city') }}</span>
        </div>
        <div class="col-md-6">
            <!-- Last name -->
            <input type="text"  class="form-control" placeholder="State" name="state">
            <span style="color:red">{{ $errors->first('state') }}</span>
            <br>  <br>
            <input type="text"  class="form-control" placeholder="Country" name="country">
            <span style="color:red">{{ $errors->first('country') }}</span>
            <br>  <br>
            <textarea  class="form-control" rows="5" placeholder="Full Address"
             name="fullAddress"></textarea>
             <span style="color:red">{{ $errors->first('fullAddress') }}</span>
        </div>

       
    </div>
    
   

</div>
<br> <hr>
                <div class="row">
                  <div class="cart">
                      <div class="col-sm-12">
                        <h3 class="text-center">Shopping Basket</h3>
                        <div class="row">
                            <div class="col-sm-8">
                              @if(isset($msg))
                              <div class="alert alert-info">{{$msg}}</div>
                              
                              @endif
                             

                            @foreach($data as $pro)

                              <div class="cart-row">
                                  <div class="row">

                                    <div class="col-xs-12 col-sm-6 col-md-6 text-center">
                                    <img src="{{Config::get('app.url')}}/public/img/{{$pro->options->img}}"
                                     class="img-responsive pull-left" width="100px" />
                                      <span class="pull-left top20">
                                      <a href="{{url('details')}}/{{$pro->id}}">
                                          <b>{{ucwords($pro->name)}}</b>
                                        </a>
                                      </span>

                                    </div>
                                    <div class="col-xs-12 col-sm-3 col-md-3">
                                      <input type="hidden" value="{{$pro->rowId}}"
                                       id="rowID{{$pro->id}}"/>
                                    <div class="cart-qty"> <span>Qty : </span>
                                    {{$pro->qty}}
                                      </div>
                                      <a class="cart-remove btn btn-success" >Update</a>
                                      <a href="{{url('cart/remove')}}/{{$pro->rowId}}"
                                         class="cart-remove btn btn-danger">Remove</a>
                                    </div>
                                    <div class="col-xs-12 col-sm-3 col-md-3">
                                      <h6>Unit Price</h6>
                                      <p>${{$pro->price}}
                                      </p>

                                      <hr/>
                                      <h6 class="redtext">
                                        Sub Total: {{$pro->subtotal}}
                                        <br>
                                        Total(included Tax): {{$pro->total}}
                                      </h6>
                                    </div>
                                  </div>
                              </div>
                              @endforeach

                              
                            <div class="clearfix"></div>
                            </div>
                            <div class="col-sm-4">
                            <div class="cart-total">
                                <h4>Total Amount</h4>
                                <table>
                                  <tbody>
                                    <tr>
                                      <td>Sub Total</td>
                                      <td>$ {{Cart::subtotal()}}</td>
                                    </tr>
                                    <tr>
                                      <td>Tax (%)</td>
                                      <td>$ {{Cart::tax()}}</td>
                                    </tr>
                                    <tr>
                                      <td>Grand Total</td>
                                      <td>$ {{Cart::total()}}</td>
                                    </tr>
                                  </tbody>
                                </table>
                               
                                <input type="submit"
                                class="btn check_out btn-block"
                                value="Place order"/>
                                </div>
                              </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                  </div>
                </div>
                @else
                <div class="row">
                   <div class="col-md-2 col-md-offset-5 top25">
                    <img src="{{Config::get('app.url')}}/public/img/empty-cart-page-doodle.png"
                    class="img-response"/>
                    <br><br>
                    <p style="text-align:center">Nothing in the bag<br><br>
                    <a href="{{url('products')}}"
                    class="btn btn-fill btn-primary">Continue Shopping</a>
                    </p>

                  </div>
                </div>
                @endif

</form>
  <!-- design of cart page  end -->
</div>
</div>
</div>
@endsection
